<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Applicants Controller
 *
 */
class NoticiasController extends AppController {

	public $scaffold = 'admin';
	
/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		
		$this->set('title_for_layout', 'Canvas - Noticias');
		$data = $this->Noticia->find('all');
		$this->paginate = array(
	        'Noticia' => array(
	            	'limit' => 15,
         			'order' => array(
         				'Noticia.data' => 'asc',
	            	),
	        ),
    	);
    	$this->Noticia->recursive = 1;
		$this->set('noticias', $this->paginate('Noticia'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Noticia->exists($id)) {
			throw new NotFoundException(__('Dados Inválidos'));
		}
		$options = array('conditions' => array('Noticia.' . $this->Noticia->primaryKey => $id));
		$data = $this->Noticia->find('first', $options);
		$this->set('noticia', $data);
	}






/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		$this->set('title_for_layout', 'Canvas - Adicionar Noticia');
		if ($this->request->is('post')) {

			$this->request->data['Image'] = $this->request->data['Image']['Image'];

			for ( $i=0; $i< count($this->request->data['Image']); $i++) {
				$fileType = pathinfo($this->request->data['Image'][$i]['name'], PATHINFO_EXTENSION);
				if ($this->request->data['Image'][$i]['error'] === UPLOAD_ERR_OK) {
					
					$id = String::uuid();
					$this->request->data['Image'][$i]['name'] = $id.'.'.$fileType;
					$this->request->data['Image'][$i]['model'] = 'Noticia';
					
					if (move_uploaded_file($this->request->data['Image'][$i]['tmp_name'], APP.'webroot/uploads'.DS.$id.'.'.$fileType)) {

						$this->Session->setFlash(__('Upload efetuado com sucesso.'), 'flash_success');

					}
				} else {
					//unset($this->request->data['Noticia']['Image']);
					$this->Session->setFlash(__('Não foi possível criar o upload. Por favor, tente novamente.'), 'flash_error');
				}
			}
			$this->Noticia->create();
			if ($this->Noticia->saveAll($this->request->data)) {
				$this->Session->setFlash(__('A Noticia foi criado com sucesso.'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível criar a noticia. Por favor, tente novamente.'), 'flash_error');
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
		$this->set('title_for_layout', 'Canvas - Editar Noticia');
		if (!$this->Noticia->exists($id)) {
			throw new NotFoundException(__('Pagina Inválida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			$this->request->data['Image'] = $this->request->data['Image']['Image'];
			
			for ( $i=0; $i< count($this->request->data['Image']); $i++) {
				$fileType = pathinfo($this->request->data['Image'][$i]['name'], PATHINFO_EXTENSION);
				if ($this->request->data['Image'][$i]['error'] === UPLOAD_ERR_OK) {
					
					$iduuid = String::uuid();
					$this->request->data['Image'][$i]['name'] = $iduuid.'.'.$fileType;
					$this->request->data['Image'][$i]['model'] = 'Noticia';
					
					if (move_uploaded_file($this->request->data['Image'][$i]['tmp_name'], APP.'webroot/uploads'.DS.$iduuid.'.'.$fileType)) {

						$this->Session->setFlash(__('Upload efetuado com sucesso.'), 'flash_success');

					}
				} else {
					//unset($this->request->data['Noticia']['Image']);
					$this->Session->setFlash(__('Não foi possível criar o upload. Por favor, tente novamente.'), 'flash_error');
				}
			}

			if ($this->Noticia->saveAll($this->request->data)) {
				
				$this->Session->setFlash(__('A Página foi editado com sucesso.'), 'flash_success');
				$this->redirect(array('action' => 'edit', $id));
				//$this->redirect(array('action' => 'index'));
				
				
			} else {
				$this->Session->setFlash(__('Não foi possível editar a página. Por favor, tente novamente.'), 'flash_error');
			}

		} else {
			$options = array('conditions' => array('Noticia.' . $this->Noticia->primaryKey => $id));
			$this->request->data = $this->Noticia->find('first', $options);

			//$this->set('noticia', $this->Noticia->find('first', $options));

		}
	}

	public function admin_deleteImg($idImage = null, $id = null){
		$this->Noticia->Image->id = $idImage;
		if(!$this->Noticia->Image->exists()){
			throw new NotFoundException(__('Imagem Inválido'));
		}
		$this->request->onlyAllow('post', 'delete', 'get');
		
		if ($this->Noticia->Image->delete()) {
			$this->Session->setFlash(__('A Imagem foi apagada com sucesso.'), 'flash_success');
			$this->redirect(array('action' => 'edit', $id));
			//$this->redirect(array('action' => 'index'));
		}
		
		$this->Session->setFlash(__('Não foi possível apagar a Imagem. Por favor, tente novamente.'), 'flash_error');
		
		$this->redirect(array('action' => 'edit', $id));

	}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Noticia->id = $id;
		if (!$this->Noticia->exists()) {
			throw new NotFoundException(__('Noticia Inválido'));
		}
		$this->request->onlyAllow('post', 'delete', 'get');
		if ($this->Noticia->delete()) {
			$this->Session->setFlash(__('A Noticia foi apagada com sucesso.'), 'flash_success');
			$this->redirect($this->referer().'#tab2');
			//$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Não foi possível apagar a Noticia. Por favor, tente novamente.'), 'flash_error');
		$this->redirect(array('action' => 'index'));
		//$this->redirect($this->referer().'#tab2');
	}
}

