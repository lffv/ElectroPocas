<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Applicants Controller
 *
 */
class HomeController extends AppController {

	var $scaffold;
	public $uses = array('Slide','Servico', 'Dica', 'Noticia', 'Parceiro', 'CategoriasDica');
	public $components = array('Paginator');
/**
 * index method
 *
 * @return void
 */
	public function home() {
		
		$this->layout = 'public';
		
		$options = array('conditions' => array('Slide.activo' => 1),'order'=>array('Slide.ordem ASC'));
		$data->slides = $this->Slide->find('all', $options);
		
		$data->dicas = $this->handlerData($this->getDicas(),4);

		$data->servicos = $this->handlerData($this->getServicos(),4);

		$data->noticias = $this->handlerData($this->getNoticias(),3);

		$data->parceiros = $this->handlerData($this->getParceiros(),6);

		$data->menu = 'home';

		$this->set('data', $data);
	}


	public function servicos($page = 1){

		$this->layout = 'public';

		$numPerPage = 12;

	    $data->paginationLinks = $this->paginateResults($this->Servico, 'Servico', $numPerPage, $page);

		$data->noticias = $this->handlerData($this->getNoticias(),3);

		$data->servicos = $this->getDataPaginate($this->Servico, 'Servico', $page, $numPerPage);//$this->Servico->find('all', $options);

		$data->parceiros = $this->handlerData($this->getParceiros(),6);

		$data->menu = 'servicos';

		$this->set('data', $data);

	}


	public function dicas(){
		
		$this->layout = 'public';

		$data->noticias = $this->handlerData($this->getNoticias(),3);

		$data->parceiros = $this->handlerData($this->getParceiros(),6);

		$data->dicas = $this->CategoriasDica->find('all', array('conditions' => array('CategoriasDica.activo' => 1)));

		for ( $i = 0; $i < count($data->dicas); $i++) {
			$data->dicas[$i]['dica'] = $this->handlerData($data->dicas[$i]['dica'],4);
		}

		$data->menu = 'dicas';

		$this->set('data', $data);

	}
	

	public function noticias($page = 1){

		$this->layout = 'public';

		$numPerPage = 4;
		
		$data->paginationLinks = $this->paginateResults($this->Noticia, 'Noticia', $numPerPage, $page);

		$data->noticias = $this->handlerData($this->getNoticias(),3);

		$data->all_noticias = $this->getDataPaginate($this->Noticia, 'Noticia', $page, $numPerPage, true);
		$data->menu = 'noticias';
		
		$this->set('data', $data);

	}

	public function sobrenos(){
		
		$this->layout = 'public';

		$data->menu = 'aboutus';

		$data->noticias = $this->handlerData($this->getNoticias(),3);
		$this->set('data', $data);
	}


	public function contactos(){
		
		$this->layout = 'public';

		$data->menu = 'contactos';

		$data->noticias = $this->handlerData($this->getNoticias(),3);
		$this->set('data', $data);
	}

	private function getNoticias(){
		$options = array('conditions' => array('Noticia.activo' => 1), 'order'=> array('Noticia.data DESC'));
		return $this->Noticia->find('all', $options);
	}

	private function getParceiros(){
		$options = array('conditions' => array('Parceiro.activo' => 1));
		return $this->Parceiro->find('all', $options);
	}

	private function getServicos(){
		$options = array('conditions' => array('Servico.activo' => 1), 'recursive' => -1);
		return $this->Servico->find('all', $options);
	}

	private function getDicas(){
		$options = array('conditions' => array('Dica.activo' => 1));
		return $this->Dica->find('all', $options);
	}

	private function getDataPaginate($model, $modelName, $page, $numPerPage, $order = false ){
		$pageCond = array('conditions' => array($modelName.'.activo' => 1), 
						  'limit' => $numPerPage,
						  'offset' => $numPerPage * ($page-1)
						 );

		if($order)$pageCond['order'] = array($modelName.'.data DESC');

		return $model->find('all', $pageCond);
	}
	/**
	 * paginateResults Function => set all Parameters to paginate Module
	 *
	 * @param model $model, String $modelName, int $numPerPage, int $page
	 * @return array
	 */
	private function paginateResults( $model=null, $modelName, $numPerPage=1, $page=1){
		
		$options = array('conditions' => array($modelName.'.activo' => 1));
		
		$data->total = $model->find('count', $options);

		$data->numPages = floor($data->total / $numPerPage);

		if(($data->total % $numPerPage) !== 0) $data->numPages++;
		
		$data->page = $page;

		$data->hasNext = true;
		$data->hasPrev = true;
		if($data->page == 1)$data->hasPrev=false;
		if($data->page == $data->numPages)$data->hasNext=false;

		return $data;
	}


	/**
	 * Handler Data Function => Group data in array for template rows
	 *
	 * @param array $array, int $numPerPage
	 * @return array
	 */
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

}
