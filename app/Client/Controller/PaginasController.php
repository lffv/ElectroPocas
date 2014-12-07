<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Applicants Controller
 *
 */
class PaginasController extends AppController {

	public $scaffold = 'admin';
	
/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		
		$this->set('title_for_layout', 'Canvas - Páginas');
		$data = $this->Pagina->find('all');
		$this->paginate = array(
	        'Pagina' => array(
	            	'limit' => 15,
         			'order' => array(
         				'Pagina.id' => 'asc',
	            	),
	        ),
    	);
    	$this->Pagina->recursive = 1;
		$this->set('paginas', $this->paginate('Pagina'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Pagina->exists($id)) {
			throw new NotFoundException(__('Dados Inválidos'));
		}
		$options = array('conditions' => array('Pagina.' . $this->Pagina->primaryKey => $id));
		$data = $this->Pagina->find('first', $options);
		$this->set('pagina', $data);
	}



/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->set('title_for_layout', 'Canvas - Editar Pagina');
		if (!$this->Pagina->exists($id)) {
			throw new NotFoundException(__('Pagina Inválida'));
		}
		$this->request->data['Metatag']['model'] ='Pagina';
		if ($this->request->is('post') || $this->request->is('put')) {

			if ($this->Pagina->saveAll($this->request->data)) {
				
				$this->Session->setFlash(__('A Página foi editado com sucesso.'), 'flash_success');
				$this->redirect(array('controller' => 'Paginas','action' => 'index'));
				//$this->redirect(array('action' => 'index'));
				
				
			} else {
				$this->Session->setFlash(__('Não foi possível editar a página. Por favor, tente novamente.'), 'flash_error');
			}

		} else {
			$options = array('conditions' => array('Pagina.' . $this->Pagina->primaryKey => $id));
			$this->request->data = $this->Pagina->find('first', $options);
		}
	}

}
