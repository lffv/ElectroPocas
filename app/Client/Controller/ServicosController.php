<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Applicants Controller
 *
 */
class ServicosController extends AppController {

	public $scaffold = 'admin';
	public $uses = array('Produto', 'Servico','Metatag');
	
/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		
		$this->set('title_for_layout', 'Canvas - Serviços');
		$data = $this->Servico->find('all');
		$this->paginate = array(
	        'Servico' => array(
	            	'limit' => 15,
         			'order' => array(
         				'Servico.id' => 'desc',
	            	),
	        ),
    	);
    	$this->Servico->recursive = -1;
    	echo("<pre>");
    	debug(print_r($this->paginate('Servico')));
    	echo("</pre>");

		$this->set('servicos', $this->paginate('Servico'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Servico->exists($id)) {
			throw new NotFoundException(__('Dados Inválidos'));
		}
		$options = array('conditions' => array('Servico.' . $this->Servico->primaryKey => $id), 'recursive' => 2);
		$this->set('servico', $this->Servico->find('first', $options));
	}


	public function admin_addSub($id=null) {
		//Abrir Modal
		debug($id);
	}
/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		$this->set('title_for_layout', 'Canvas - Adicionar Serviço');
		if ($this->request->is('post')) {

			$file = $this->request->data['Servico']['imagem'];
			$fileType = pathinfo($file['name'], PATHINFO_EXTENSION);
			if ($file['error'] === UPLOAD_ERR_OK) {
				
				$id = String::uuid();
				$this->request->data['Servico']['imagem'] = $id.'.'.$fileType;
				if (move_uploaded_file($file['tmp_name'], APP.'webroot/uploads'.DS.$id.'.'.$fileType)) {

					$this->Session->setFlash(__('Upload efetuado com sucesso.'), 'flash_success');

				}
			} else {
				unset($this->request->data['Servico']['imagem']);
				$this->Session->setFlash(__('Não foi possível criar o upload. Por favor, tente novamente.'), 'flash_error');
			}
			
			$this->Servico->create();
			if ($this->Servico->saveAll($this->request->data)) {
				$this->Session->setFlash(__('O Serviço foi criado com sucesso.'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível criar o serviço. Por favor, tente novamente.'), 'flash_error');
			}
		}
	}



/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->set('title_for_layout', 'Canvas - Editar Serviço');
		if (!$this->Servico->exists($id)) {
			throw new NotFoundException(__('Serviço Inválida'));
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			$imagemOld = $this->Servico->find('first', array('fields' => array('Servico.imagem'),'conditions' => array('Servico.id'=> $this->request->data['Servico']['id'])));
			if($this->request->data['Servico']['imagem']['name'] !== ''){
			
				$file = $this->request->data['Servico']['imagem'];
				$fileType = pathinfo($file['name'], PATHINFO_EXTENSION);
			
				if ($file['error'] === UPLOAD_ERR_OK) {
					
					$id = String::uuid();
					$this->request->data['Servico']['imagem'] = $id.'.'.$fileType;
					if (move_uploaded_file($file['tmp_name'], APP.'webroot/uploads'.DS.$id.'.'.$fileType)) {

						$file_delete = new File(APP.'webroot/uploads'.DS.$imagemOld['Servico']['imagem'], false, 0777);
						
						$file_delete->delete();

						$this->Session->setFlash(__('Upload efetuado com sucesso.'), 'flash_success');
					}
				} else {

					$this->Session->setFlash(__('Não foi possível criar o upload. Por favor, tente novamente.'), 'flash_error');

				}
			}
			if($this->request->data['Servico']['imagem']['name'] == ""){
				unset($this->request->data['Servico']['imagem']);
			}

			if ($this->Servico->saveAll($this->request->data)) {
				
				$this->Session->setFlash(__('O Serviço foi editado com sucesso.'), 'flash_success');
				$this->redirect(array('action' => 'index'));
				
			} else {
				$this->Session->setFlash(__('Não foi possível editar o serviço. Por favor, tente novamente.'), 'flash_error');
			}

		} else {
			$options = array('conditions' => array('Servico.' . $this->Servico->primaryKey => $id));
			$this->request->data = $this->Servico->find('first', $options);
			

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
		$this->Servico->id = $id;
		if (!$this->Servico->exists()) {
			throw new NotFoundException(__('Serviço Inválido'));
		}
		$this->request->onlyAllow('post', 'delete', 'get');
		if ($this->Servico->delete()) {
			$this->Session->setFlash(__('O Servico foi apagado com sucesso.'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Não foi possível apagar o serviço. Por favor, tente novamente.'), 'flash_error');
		$this->redirect(array('action' => 'index'));
	}
}
