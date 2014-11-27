<?php
App::uses('AppController', 'Controller');
/**
 * News Controller
 *
 * @property News $News
 */
class BannersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('title_for_layout', 'Canvas - Banners');
		$this->paginate = array(
        'Banner' => array(
            	'limit' => 100,
         			'order' => array(
         			'Banner.ordem' => 'asc',
            ),
        ),
  	);
		$this->Banner->recursive = 0;
		$this->set('banners', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Canvas - Adicionar Banner');
		if ($this->request->is('post')) {
			$this->Banner->create();
			if ($this->Banner->save($this->request->data)) {
				$this->Session->setFlash(__('O Banner foi criado com sucesso.'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível criar o Banner.'), 'flash_error');
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
		$this->set('title_for_layout', 'Canvas - Editar Banner');
		if (!$this->Banner->exists($id)) {
			throw new NotFoundException(__('Invalid banner'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Banner->save($this->request->data)) {
				$this->Session->setFlash(__('O Banner foi editado com sucesso.'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível editar o Banner.'), 'flash_error');
			}
		} else {
			$options = array('conditions' => array('Banner.' . $this->Banner->primaryKey => $id));
			$this->request->data = $this->Banner->find('first', $options);
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
		$this->Banner->id = $id;
		if (!$this->Banner->exists()) {
			throw new NotFoundException(__('Invalid banner'));
		}
		$this->request->onlyAllow('post', 'delete', 'get');
		if ($this->Banner->delete()) {
			$this->Session->setFlash(__('O Banner foi apagada com sucesso.'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Não foi possível apagar o Banner.'), 'flash_error');
		$this->redirect(array('action' => 'index'));
	}
	
	function re_order()	{
        $this->layout = "ajax";
        $this->autoRender = false;

        $data = $_POST['data'];
        $order = explode(',', $data);

        for($i = 0; $i < sizeof($order); $i++)	{
        	$ordem = $i +1;
	        $this->Banner->query("UPDATE banners SET ordem = ".$ordem." WHERE id = ".$order[$i]);
        }
        echo json_encode($order);
        return;
  }

}
