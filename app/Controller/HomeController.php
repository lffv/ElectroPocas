<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Applicants Controller
 *
 */
class HomeController extends AppController {

	var $scaffold;
	public $uses = array('Slide','Servico', 'Dica', 'Noticia');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		$i=0; $ct=0;
		$options = array('conditions' => array('Slide.activo' => 1),'order'=>array('ordem ASC'));
		$data->slides = $this->Slide->find('all', $options);
		
		$options = array('conditions' => array('Servico.activo' => 1), 'recursive' => -1);
		$data->servicos = $this->handlerData($this->Servico->find('all', $options),4);

		$options = array('conditions' => array('Dica.activo' => 1));
		$data->dicas = $this->handlerData($this->Dica->find('all', $options),4);

		$options = array('conditions' => array('Noticia.activo' => 1));
		$data->noticias = $this->handlerData($this->Noticia->find('all', $options),3);

		$this->set('data', $data);
	}

	private function handlerData($array, $numPerPage){
		$i=0; $numPag=0;
		$ret = array();
		foreach ($array as $item) {
			$ret[$numPag][$i]= $item;
			$i++;
			if($i == $numPerPage){ $i=0; $numPag++; }
		}
		return $ret;
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Slide->exists($id)) {
			throw new NotFoundException(__('Dados Inválidos'));
		}
		$options = array('conditions' => array('Slide.' . $this->Slide->primaryKey => $id));
		$data = $this->Slide->find('first', $options);
		$this->set('slide', $data);
	}



/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('title_for_layout', 'Canvas - Editar Slide');
		if (!$this->Slide->exists($id)) {
			throw new NotFoundException(__('Slide Inválida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

			$file = $this->request->data['Slide']['imagem'];
			$bg_file = $this->request->data['Slide']['bg_imagem'];

			$fileType = pathinfo($file['name'], PATHINFO_EXTENSION);
			$bg_fileType = pathinfo($bg_file['name'], PATHINFO_EXTENSION);

			if ($file['error'] === UPLOAD_ERR_OK) {
				
				$id = String::uuid();
				$this->request->data['Slide']['imagem'] = $id.'.'.$fileType;
				
				if (move_uploaded_file($file['tmp_name'], APP.'webroot/uploads'.DS.$id.'.'.$fileType)) {
					$this->Session->setFlash(__('Upload efetuado com sucesso.'), 'flash_success');
				}
			} else {
				unset($this->request->data['Slide']['imagem']);
				$this->Session->setFlash(__('Não foi possível criar o upload. Por favor, tente novamente.'), 'flash_error');
			}

			if ($bg_file['error'] === UPLOAD_ERR_OK) {
				
				$id_bg = String::uuid();
				$this->request->data['Slide']['bg_imagem'] = $id_bg.'.'.$bg_fileType;
				
				if (move_uploaded_file($bg_file['tmp_name'], APP.'webroot/uploads'.DS.$id_bg.'.'.$bg_fileType)) {
					$this->Session->setFlash(__('Upload efetuado com sucesso.'), 'flash_success');
				}
			} else {
				unset($this->request->data['Slide']['bg_imagem']);
				$this->Session->setFlash(__('Não foi possível criar o upload. Por favor, tente novamente.'), 'flash_error');
			}

			if ($this->Slide->saveAll($this->request->data)) {
				
				$this->Session->setFlash(__('A Página foi editado com sucesso.'), 'flash_success');
				$this->redirect(array('controller' => 'Slides','action' => 'index'));
				//$this->redirect(array('action' => 'index'));
				
				
			} else {
				$this->Session->setFlash(__('Não foi possível editar a página. Por favor, tente novamente.'), 'flash_error');
			}

		} else {
			$options = array('conditions' => array('Slide.' . $this->Slide->primaryKey => $id));
			$this->request->data = $this->Slide->find('first', $options);
		}
	}

}
