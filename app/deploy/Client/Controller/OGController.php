<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Applicants Controller
 *
 */
class OGController extends AppController {

	var $scaffold;
	public $uses = array('Noticia');
	//public $components = array('Paginator');
/**
 * index method
 *
 * @return void
 */
	public function share($id = null) {
		$this->layout = 'share';
		
		if (!$this->Noticia->exists($id)) {
			throw new NotFoundException(__('Página Inválida'));
		}
		if($id == null){
			throw new NotFoundException(__('Página Inválida'));
		}

		$options = array('conditions' => array('Noticia.' . $this->Noticia->primaryKey => $id));
		$data = $this->Noticia->find('first', $options);
		$this->set('noticia', $data);

	}

	

}
