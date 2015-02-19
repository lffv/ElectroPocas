<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Applicants Controller
 *
 */
class CategoriasDicasController extends AppController {

	public $scaffold = 'admin';
	//public $uses = array('Produto', 'Servico','Metatag');
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		$this->set('title_for_layout', 'Canvas - Tipo dicas');
		$data = $this->CategoriasDica->find('all');
		$this->paginate = array(
	        'Categorias_dica' => array(
	            	'limit' => 15,
         			'order' => array(
         				'Categorias_dica.id' => 'desc',
	            	),
	        ),
    	);
    	$this->CategoriasDica->recursive = 2;
		$this->set('categorias', $this->paginate('CategoriasDica'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CategoriasDica->exists($id)) {
			throw new NotFoundException(__('Dados Inválidos'));
		}
		$options = array('conditions' => array('CategoriasDica.' . $this->CategoriasDica->primaryKey => $id));
		$this->set('categoria', $this->CategoriasDica->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Canvas - Adicionar Categoria');
		if ($this->request->is('post')) {
			$this->CategoriasDica->create();
			if ($this->CategoriasDica->saveAll($this->request->data)) {
				$this->Session->setFlash(__('O Serviço foi criado com sucesso.'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível criar o serviço. Por favor, tente novamente.'), 'flash_error');
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
	public function edit($id = null) {
		$this->set('title_for_layout', 'Canvas - Editar Categoria');
		if (!$this->CategoriasDica->exists($id)) {
			throw new NotFoundException(__('Categoria Inválida'));
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {

			if ($this->CategoriasDica->saveAll($this->request->data)) {
				
				$this->Session->setFlash(__('O Serviço foi editado com sucesso.'), 'flash_success');
				$this->redirect(array('action' => 'index'));
				
			} else {
				$this->Session->setFlash(__('Não foi possível editar o serviço. Por favor, tente novamente.'), 'flash_error');
			}

		} else {
			$options = array('conditions' => array('CategoriasDica.' . $this->CategoriasDica->primaryKey => $id));
			$this->request->data = $this->CategoriasDica->find('first', $options);
			

		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CategoriasDica->id = $id;
		if (!$this->CategoriasDica->exists()) {
			throw new NotFoundException(__('Categoria Inválido'));
		}
		$this->request->onlyAllow('post', 'delete', 'get');
		if ($this->CategoriasDica->delete()) {
			$this->Session->setFlash(__('A Categoria foi apagado com sucesso.'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Não foi possível apagar o categoria. Por favor, tente novamente.'), 'flash_error');
		$this->redirect(array('action' => 'index'));
	}
}
