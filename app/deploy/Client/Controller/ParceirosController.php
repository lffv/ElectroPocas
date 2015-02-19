<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Applicants Controller
 *
 */
class ParceirosController extends AppController {

	public $scaffold = 'admin';
/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->set('title_for_layout', 'Canvas - Parceiros');
		$this->paginate = array(
	        'Parceiro' => array(
	            	'limit' => 15,
	         			'order' => array(
	         			'Parceiro.id' => 'desc',
	            ),
	        ),
    	);
    	$this->Parceiro->recursive = 0;
		$this->set('parceiros', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Parceiro->exists($id)) {
			throw new NotFoundException(__('Dados Inválidos'));
		}
		$options = array('conditions' => array('Parceiro.' . $this->Parceiro->primaryKey => $id));
		$this->set('parceiro', $this->Parceiro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		$this->set('title_for_layout', 'Canvas - Adicionar Parceiro');
		if ($this->request->is('post')) {
			if($this->request->data['Parceiro']['imagem']['name'] !== ''){
				$file = $this->request->data['Parceiro']['imagem'];
				$fileType = pathinfo($file['name'], PATHINFO_EXTENSION);
				if ($file['error'] === UPLOAD_ERR_OK) {
					
					$id = String::uuid();
					$this->request->data['Parceiro']['imagem'] = $id.'.'.$fileType;
					if (move_uploaded_file($file['tmp_name'], APP.'webroot/uploads'.DS.$id.'.'.$fileType)) {

						$this->Session->setFlash(__('Upload efetuado com sucesso.'), 'flash_success');

					}
				} else {

					$this->Session->setFlash(__('Não foi possível criar o upload. Por favor, tente novamente.'), 'flash_error');
				}
			}else{
				unset($this->request->data['Parceiro']['imagem']);
			}
			$this->Parceiro->create();
			if ($this->Parceiro->saveAll($this->request->data)) {
				$this->Session->setFlash(__('O Parceiro foi criado com sucesso.'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível criar o parceiro. Por favor, tente novamente.'), 'flash_error');
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
		$this->set('title_for_layout', 'Canvas - Editar Parceiro');
		if (!$this->Parceiro->exists($id)) {
			throw new NotFoundException(__('Parceiro Inválida'));
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			$imagemOld = $this->Parceiro->find('first', array('fields' => array('Parceiro.imagem'),'conditions' => array('Parceiro.id'=> $this->request->data['Parceiro']['id'])));
			if($this->request->data['Parceiro']['imagem']['name'] !== ''){
			
				$file = $this->request->data['Parceiro']['imagem'];
				$fileType = pathinfo($file['name'], PATHINFO_EXTENSION);
			
				if ($file['error'] === UPLOAD_ERR_OK) {
					
					$id = String::uuid();
					$this->request->data['Parceiro']['imagem'] = $id.'.'.$fileType;
					if (move_uploaded_file($file['tmp_name'], APP.'webroot/uploads'.DS.$id.'.'.$fileType)) {

						$file_delete = new File(APP.'webroot/uploads'.DS.$imagemOld['Parceiro']['imagem'], false, 0777);
						
						$file_delete->delete();

						$this->Session->setFlash(__('Upload efetuado com sucesso.'), 'flash_success');
					}
				} else {

					$this->Session->setFlash(__('Não foi possível criar o upload. Por favor, tente novamente.'), 'flash_error');

				}
			}

			

			if($this->request->data['Parceiro']['imagem']['name'] == ""){
				
				$data = array(
					'id' => $this->request->data['Parceiro']['id'],
					'link' => $this->request->data['Parceiro']['link'],
					'designacao' => $this->request->data['Parceiro']['designacao'],
					'imagem' => $imagemOld['Parceiro']['imagem'],
					'activo' => $this->request->data['Parceiro']['activo'],
					);
					//'imagem' => $this->Parceiro->find('first', );
			}else {
				$data = $this->request->data;
			}
			

			if ($this->Parceiro->saveAll($data)) {
				$this->Session->setFlash(__('O Parceiro foi editado com sucesso.'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível editar o parceiro. Por favor, tente novamente.'), 'flash_error');
			}

		} else {
			$options = array('conditions' => array('Parceiro.' . $this->Parceiro->primaryKey => $id));
			$this->request->data = $this->Parceiro->find('first', $options);
			

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
		$this->Parceiro->id = $id;
		if (!$this->Parceiro->exists()) {
			throw new NotFoundException(__('Parceiro Inválido'));
		}
		$this->request->onlyAllow('post', 'delete', 'get');
		if ($this->Parceiro->delete()) {
			$this->Session->setFlash(__('O Parceiro foi apagado com sucesso.'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Não foi possível apagar o parceiro. Por favor, tente novamente.'), 'flash_error');
		$this->redirect(array('action' => 'index'));
	}
}
