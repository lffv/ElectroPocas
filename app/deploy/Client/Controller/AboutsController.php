<?php
App::uses('AppController', 'Controller');
/**
 * Applicants Controller
 *
 */
class AboutsController extends AppController {

/**
 * index method
 *
 * @return void
 */
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('title_for_layout', 'Canvas - Editar Página About');
		if (!$this->About->exists($id)) {
			throw new NotFoundException(__('Página Inválida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->About->saveAll($this->request->data)) {
				$this->Session->setFlash(__('A Página About foi editado com sucesso.'), 'flash_success');
			} else {
				$this->Session->setFlash(__('Não foi possível editar a Página About. Por favor, tente novamente.'), 'flash_error');
			}
		} else {
			$this->About->locale = 'pt';
			$options = array('conditions' => array('About.' . $this->About->primaryKey => $id));
			$this->request->data = $this->About->find('first', $options);
		}
	}

}
