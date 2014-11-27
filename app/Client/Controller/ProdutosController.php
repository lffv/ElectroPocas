<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Applicants Controller
 *
 */
class ProdutosController extends AppController {

	public $scaffold='admin';

	public $uses = array('Produto', 'Servico' ,'Metatag');
	
/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		
		$this->set('title_for_layout', 'Canvas - Produtos');
		$data = $this->Servico->find('all');
		$this->paginate = array(
	        'Servico' => array(
	            	'limit' => 15,
         			'order' => array(
         				'Servico.id' => 'desc',
	            	),
	        ),
    	);
    	$this->Servico->recursive = 2;
		$this->set('servicos', $this->paginate('Servico'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null, $idServico = null) {
		if (!$this->Produto->exists($id) || !$this->Servico->exists($idServico)) {
			throw new NotFoundException(__('Dados Inválidos'));
		}
		$options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
		$data = $this->Produto->find('first', $options);
		$this->set('produto', $data);
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add($idServico) {
		
		if(!$this->Servico->exists($idServico)){
			throw new NotFoundException(__('Dados Inválidos'));
		}

		$this->set('title_for_layout', 'Canvas - Adicionar Produto');
		if ($this->request->is('post')) {

			$file = $this->request->data['Produto']['imagem'];
			$fileType = pathinfo($file['name'], PATHINFO_EXTENSION);
			if ($file['error'] === UPLOAD_ERR_OK) {
				
				$id = String::uuid();
				$this->request->data['Produto']['imagem'] = $id.'.'.$fileType;
				$this->request->data['Image'][0]['name'] = $id.'.'.$fileType;
				$this->request->data['Image'][0]['model'] = 'Produto';
				
				if (move_uploaded_file($file['tmp_name'], APP.'webroot/uploads'.DS.$id.'.'.$fileType)) {

					$this->Session->setFlash(__('Upload efetuado com sucesso.'), 'flash_success');

				}
			} else {
				unset($this->request->data['Produto']['imagem']);
				$this->Session->setFlash(__('Não foi possível criar o upload. Por favor, tente novamente.'), 'flash_error');
			}
			$this->Produto->create();

			if ($this->Produto->saveAll($this->request->data)) {
				$this->Session->setFlash(__('O Produto foi criado com sucesso.'), 'flash_success');
				$this->redirect(array('controller' => 'Servicos','action' => 'view', $idServico, '#' =>  'tab2'));
			} else {
				$this->Session->setFlash(__('Não foi possível criar o Produto. Por favor, tente novamente.'), 'flash_error');
			}
		} else {
			$options = array(
				'conditions' => array('Servico.' . $this->Servico->primaryKey => $idServico),
				'fields' => array('Servico.id')
			);
			$this->Servico->recursive = -1;
			$this->set('servico', $this->Servico->find('first', $options));

		}
	}



/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null, $idServico = null) {
		$this->set('title_for_layout', 'Canvas - Editar Produto');
		if (!$this->Produto->exists($id)) {
			throw new NotFoundException(__('Produto Inválida'));
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$imagemOld = $this->Produto->find('first', array('fields' => array('Produto.imagem'),'conditions' => array('Produto.id'=> $this->request->data['Produto']['id'])));
			if($this->request->data['Produto']['imagem']['name'] !== ''){
			
				$file = $this->request->data['Produto']['imagem'];
				$fileType = pathinfo($file['name'], PATHINFO_EXTENSION);
			
				if ($file['error'] === UPLOAD_ERR_OK) {
					
					$id = String::uuid();
					$this->request->data['Produto']['imagem'] = $id.'.'.$fileType;
					if (move_uploaded_file($file['tmp_name'], APP.'webroot/uploads'.DS.$id.'.'.$fileType)) {

						$file_delete = new File(APP.'webroot/uploads'.DS.$imagemOld['Produto']['imagem'], false, 0777);
						
						$file_delete->delete();

						$this->Session->setFlash(__('Upload efetuado com sucesso.'), 'flash_success');
					}
				} else {

					$this->Session->setFlash(__('Não foi possível criar o upload. Por favor, tente novamente.'), 'flash_error');

				}
			}
			if($this->request->data['Produto']['imagem']['name'] == ""){
				unset($this->request->data['Produto']['imagem']);
			}

			if ($this->Produto->saveAll($this->request->data)) {
				
				$this->Session->setFlash(__('O Produto foi editado com sucesso.'), 'flash_success');
				//$this->redirect(array('action' => 'index'));
				$this->redirect(array('controller' => 'Servicos','action' => 'view', $idServico,'#'=>'tab2'));
				
			} else {
				$this->Session->setFlash(__('Não foi possível editar o serviço. Por favor, tente novamente.'), 'flash_error');
			}

		} else {
			$options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));

			$this->request->data = $this->Produto->find('first', $options);
			

		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Produto->id = $id;
		if (!$this->Produto->exists()) {
			throw new NotFoundException(__('Produto Inválido'));
		}
		$this->request->onlyAllow('post', 'delete', 'get');
		if ($this->Produto->delete()) {
			$this->Session->setFlash(__('O Produto foi apagado com sucesso.'), 'flash_success');
			$this->redirect($this->referer().'#tab2');
			//$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Não foi possível apagar o serviço. Por favor, tente novamente.'), 'flash_error');
		//$this->redirect(array('action' => 'index'));
		$this->redirect($this->referer().'#tab2');
	}
}
