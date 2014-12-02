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
		
		$options = array('conditions' => array('Slide.activo' => 1),'order'=>array('ordem ASC'));
		$data->slides = $this->Slide->find('all', $options);
		
		$options = array('conditions' => array('Servico.activo' => 1), 'recursive' => -1);
		$data->servicos = $this->handlerData($this->Servico->find('all', $options),4);

		$options = array('conditions' => array('Dica.activo' => 1));
		$data->dicas = $this->handlerData($this->Dica->find('all', $options),4);

		$options = array('conditions' => array('Noticia.activo' => 1));
		$data->noticias = $this->handlerData($this->Noticia->find('all', $options),3);

		$options = array('conditions' => array('Parceiro.activo' => 1));
		$data->parceiros = $this->handlerData($this->Parceiro->find('all', $options),6);

		$data->menu = 'home';

		$this->set('data', $data);
	}


	public function servicos($page = 1){

		$numPerPage = 12;
		$pageCond = array('conditions' => array('Servico.activo' => 1), 
						  'recursive' => -1, 
						  'limit' => $numPerPage,
						  'offset' => $numPerPage * ($page-1)
						 );

		//Pagination Links
	    $data->paginationLinks = $this->paginateResults($this->Servico, 'Servico', $numPerPage, $page);

		$this->layout = 'public';

		$options = array('conditions' => array('Noticia.activo' => 1));
		$data->noticias = $this->handlerData($this->Noticia->find('all', $options),3);

		$options = $pageCond;
		$data->servicos = $this->Servico->find('all', $options);

		$options = array('conditions' => array('Parceiro.activo' => 1));
		$data->parceiros = $this->handlerData($this->Parceiro->find('all', $options),6);

		$data->menu = 'servicos';

		$this->set('data', $data);

	}


	public function dicas(){
		
		$this->layout = 'public';

		$options = array('conditions' => array('Noticia.activo' => 1));
		$data->noticias = $this->handlerData($this->Noticia->find('all', $options),3);

		$options = array('conditions' => array('Parceiro.activo' => 1));
		$data->parceiros = $this->handlerData($this->Parceiro->find('all', $options),6);

		$options = array('conditions' => array('CategoriasDica.activo' => 1));
		$data->dicas = $this->CategoriasDica->find('all', $options);

		for ( $i = 0; $i < count($data->dicas); $i++) {
			$data->dicas[$i]['dica'] = $this->handlerData($data->dicas[$i]['dica'],4);
		}

		$data->menu = 'dicas';

		$this->set('data', $data);

	}
	

	public function noticias($page = 1){

		$this->layout = 'public';

		$numPerPage = 4;
		$pageCond = array('conditions' => array('Noticia.activo' => 1), 
						  'order'=> array('Noticia.data DESC'),
						  'limit' => $numPerPage,
						  'offset' => $numPerPage * ($page-1)
						 );

		$data->paginationLinks = $this->paginateResults($this->Noticia, 'Noticia', $numPerPage, $page);

		$options = array('conditions' => array('Noticia.activo' => 1), 'order'=> array('Noticia.data DESC'));
		$data->noticias = $this->handlerData($this->Noticia->find('all', $options),3);

		$options = $pageCond;
		$data->all_noticias = $this->Noticia->find('all', $options);
		$data->menu = 'noticias';
		
		$this->set('data', $data);

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
