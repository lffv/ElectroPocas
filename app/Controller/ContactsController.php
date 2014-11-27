<?php
App::uses('AppController', 'Controller');

class ContactsController extends AppController {

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('title_for_layout', 'Canvas - Editar Contactos Gerais');
		if (!$this->Contact->exists($id)) {
			throw new NotFoundException(__('Invalid contact'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contact->saveAll($this->request->data)) {
				$this->Session->setFlash(__('Os Contactos Gerais foram editados com sucesso.'), 'flash_success');
			} else {
				$this->Session->setFlash(__('Não foi possível editar os Contactos Gerais. Por favor, tente novamente.'), 'flash_error');
			}
		} else {
			$options = array('conditions' => array('Contact.' . $this->Contact->primaryKey => $id));
			$this->request->data = $this->Contact->find('first', $options);
		}
	}

}
