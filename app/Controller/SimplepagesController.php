<?php
App::uses('AppController', 'Controller');
/**
 * Simplepages Controller
 *
 * @property Simplepage $Simplepage
 */
class SimplepagesController extends AppController {

	public function edit($id = null) {
		$title_page = "";
		if($id == 1 ) $title_page = "Tratamentos";
		if($id == 2 ) $title_page = "Corpo";
		if($id == 3 ) $title_page = "Rosto";
		$this->set('title_page', $title_page);
		$this->set('title_for_layout', 'Canvas - Editar Página '.$title_page);
		if (!$this->Simplepage->exists($id)) {
			throw new NotFoundException(__('Invalid page'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Simplepage->save($this->request->data)) {
				$this->Session->setFlash(__('O conteúdo foi editado com sucesso.'), 'flash_success');
				$this->redirect(array('action' => 'edit/'.$this->request->data['Simplepage']['id']));
			} else {
				$this->Session->setFlash(__('Não foi possível editar o conteúdo. Por favor, tente novamente.'), 'flash_error');
			}
		} else {
			$options = array('conditions' => array('Simplepage.' . $this->Simplepage->primaryKey => $id));
			$this->request->data = $this->Simplepage->find('first', $options);
		}
		if($id == 4)
			$this->render("edit_test");
	}
}