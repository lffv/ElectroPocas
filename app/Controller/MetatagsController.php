<?php
App::uses('AppController', 'Controller');

class MetatagsController extends AppController {

	var $name = 'Metatags';

	
	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Não foram encontradas Metatags.'), 'flash_warning');
			$this->redirect($this->referer());
		}
		if (!empty($this->data)) {
			if ($this->Metatag->save($this->data)) {
				$this->Session->setFlash(__('Metatags Guardados com sucesso.'), 'flash_success');
				
			} else {
				$this->Session->setFlash(__('Não foi possível guardar as Metatags.'), 'flash_error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Metatag->read(null, $id);
			if(empty($this->data))	{
				$this->Session->setFlash(__('Não foram encontradas Metatags.'), 'flash_warning');	
				$this->redirect($this->referer());
			}
		}
	}
	function pages($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Não foram encontradas Metatags.'), 'flash_warning');
			$this->redirect($this->referer());
		}
		if (!empty($this->data)) {
			if ($this->Metatag->save($this->data)) {
				$this->Session->setFlash(__('Metatags Guardados com sucesso.'), 'flash_success');
				
			} else {
				$this->Session->setFlash(__('Não foi possível guardar as Metatags.'), 'flash_error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Metatag->read(null, $id);
			if($id == 2)
				$this->set('page', 'Novidades');
			if($id == 3)
				$this->set('page', 'Corpo');
			if($id == 4)
				$this->set('page', 'Cara');
			if($id == 5)
				$this->set('page', 'Tratamentos');
			if(empty($this->data))	{
				$this->Session->setFlash(__('Não foram encontradas Metatags.'), 'flash_warning');	
				$this->redirect($this->referer());
			}
		}
	}
}
