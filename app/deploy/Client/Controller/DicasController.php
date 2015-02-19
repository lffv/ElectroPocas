<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Applicants Controller
 *
 */
class DicasController extends AppController {

	public $scaffold = 'admin';
	public $uses = array('CategoriasDicas','Dica');
	
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
    	$this->Servico->recursive = 2;
		$this->set('servicos', $this->paginate('Servico'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null, $idCategoria = null) {
		if (!$this->Dica->exists($id) || !$this->Dica->exists($idCategoria)) {
			throw new NotFoundException(__('Dados Inválidos'));
		}
		$options = array('conditions' => array('Dica.' . $this->Dica->primaryKey => $id));
		$data = $this->Dica->find('first', $options);
		$this->set('dica', $data);
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add($idCategoria) {
		
		if(!$this->CategoriasDicas->exists($idCategoria)){

			throw new NotFoundException(__('Dados Inválidos'));
		}

		$this->set('title_for_layout', 'Canvas - Adicionar Dica');
		if ($this->request->is('post')) {

			$this->Dica->create();
			if ($this->Dica->saveAll($this->request->data)) {
				
				$this->Session->setFlash(__('A Dica foi criado com sucesso.'), 'flash_success');
				$this->redirect(array('controller' => 'CategoriasDicas','action' => 'view', $idCategoria
					, '#' =>  'tab2'));
			} else {
				$this->Session->setFlash(__('Não foi possível criar a Dica. Por favor, tente novamente.'), 'flash_error');
			}
		} else {
			$options = array(
				'conditions' => array( $this->CategoriasDicas->primaryKey => $idCategoria),
				'fields' => array('id')
			);
			$this->CategoriasDicas->recursive = -1;
			$this->set('categoria', $this->CategoriasDicas->find('first', $options));

		}
	}



/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null, $idServico = null) {
		$this->set('title_for_layout', 'Canvas - Editar Dica');
		if (!$this->Dica->exists($id)) {
			throw new NotFoundException(__('Dica Inválida'));
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			
			if ($this->Dica->saveAll($this->request->data)) {
				
				$this->Session->setFlash(__('A dica foi editada com sucesso.'), 'flash_success');
				//$this->redirect(array('action' => 'index'));
				$this->redirect(array('controller' => 'CategoriasDicas','action' => 'view', $idServico, '#' =>  'tab2'));
				
			} else {
				$this->Session->setFlash(__('Não foi possível editar a dica. Por favor, tente novamente.'), 'flash_error');
			}

		} else {
			$options = array('conditions' => array('Dica.' . $this->Dica->primaryKey => $id));
			$this->request->data = $this->Dica->find('first', $options);
			

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
		$this->Dica->id = $id;
		if (!$this->Dica->exists()) {
			throw new NotFoundException(__('Dica Inválido'));
		}
		$this->request->onlyAllow('post', 'delete', 'get');
		if ($this->Dica->delete()) {
			$this->Session->setFlash(__('A dica foi apagada com sucesso.'), 'flash_success');
			$this->redirect($this->referer().'#tab2');
			//$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Não foi possível apagar a dica. Por favor, tente novamente.'), 'flash_error');
		//$this->redirect(array('action' => 'index'));
		$this->redirect($this->referer().'#tab2');
	}
}
