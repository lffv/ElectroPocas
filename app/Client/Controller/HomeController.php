<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Applicants Controller
 *
 */
class HomeController extends AppController {

	var $scaffold;
	public $uses = array('Metatag','Produto','Pagina','Slide','Servico', 'Dica', 'Noticia', 'Parceiro', 'CategoriasDica');
	public $components = array('Paginator');
	private $results;

	private function mergeResult($prod, $paginas){
		$results = array();
		
		foreach ($prod as $key => $value) {
			if(!in_array($value['Servico'], $results)) array_push($results, $value['Servico']);
		}
		foreach ($paginas as $key => $value) {
			
			if($value['Metatag']['model'] == 'Pagina'){
				if(!in_array($value['Servico'], $results)){

					switch ($value['Pagina']['designacao']) {
						case 'about':
								$pagina = array('pagina'=> array(
																		'url' => 'AboutUs',
																		'texto' => 'Conheça a Electropoças!'
									));
							break;
						case 'listaServicos':
								$pagina = array('pagina'=> array(
																		'url' => 'Servicos',
																		'texto' => 'Conheça os serviços Electropoças!'
									));
							break;
						case 'dicas':
								$pagina = array('pagina'=> array(
																		'url' => 'dicas',
																		'texto' => 'Conheça as Dicas da Electropoças!'
									));
							break;
						case 'listaNoticias':
								$pagina = array('pagina'=> array(
																		'url' => 'DicasDePoupanca',
																		'texto' => 'Conheça as Notícias da Electropoças!'
									));
							break;
						case 'contacto':
								$pagina = array('pagina'=> array(
																		'url' => 'Contactos',
																		'texto' => 'Entre em contacto com a Electropoças!'
									));
							break;
						default:
								$pagina = array('pagina'=> array(
																		'url' => '',
																		'texto' => 'Conheça a Electropoças!'
									));
							break;
					}

					array_push($results, $pagina);
				} 
			}
			if($value['Metatag']['model'] == 'Servico'){
				if(!in_array($value['Servico'], $results)) array_push($results, $value['Servico']);
			}
		}
		return($results);
		
		



	}

	public function search(){

		$this->layout = 'public';

		$search = $this->request->data['stringSearch'];
		
		$options = array('conditions' => 
											array( "OR" => array(
							    				"Metatag.title LIKE" => '%'.$search.'%',
							    				"Metatag.description LIKE" => '%'.$search.'%',
							    				"Metatag.keywords LIKE" => '%'.$search.'%'
							    			)
											),
											'recursive' => 1
										);
		
		$metatags = $this->Metatag->find('all', $options);
		
		$options = array('conditions' => 
											array( "OR" => array(
							    				"Produto.texto LIKE" => '%'.$search.'%',
							    				"Produto.designacao LIKE" => '%'.$search.'%'
							    			)
											)
										);
		
		
		$produtos = $this->Produto->find('all', $options);
		
		debug($produtos);
		debug($metatags);
		
		$this->set('data',$this->mergeResult($produtos, $metatags));
		$this->set('search', $search);
		$this->set('metatags',$this->getMetatags(1));

	}


/**
 * index method
 *
 * @return void
 */
	public function sendMail(){

		$this->layout = null ;
		$this->autoRender = false;
		
		
		$email = $this->request->data['mail'];
		$name = $this->request->data['name'];
		$message = $this->request->data['message'];

			$Email = new CakeEmail('gmail');
			$Email->template('default', 'default');
			$Email->emailFormat('html');
			
			$Email->attachments(array(
			    'contacts.jpg' => array(
			        'file' => WWW_ROOT."img/logo.png",
			        'mimetype' => 'image/jpeg',
			        'contentId' => 'my'
			    ),
			));
			
			$Email->viewVars(array('email' => $email, 'name'=> $name, 'price' => $message));
	        $Email->to('info@electropocas.pt');
	        $Email->subject('Automagically generated email');
	        $Email->replyTo('aa@gmail.com');
	        $Email->from ('aa@gmail.com');
	        $Email->send();
			$response = array('action' => 'done');
			
		return json_encode($response);
	}

	public function home() {
		
		$this->layout = 'public';
		
		$options = array('conditions' => array('Slide.activo' => 1),'order'=>array('Slide.ordem ASC'));
		$data->slides = $this->Slide->find('all', $options);
		
		$data->dicas = $this->handlerData($this->getCategoriasDicas(),4);

		$data->servicos = $this->handlerData($this->getServicos(),4);

		$data->noticias = $this->handlerData($this->getNoticias(),3);

		$data->parceiros = $this->handlerData($this->getParceiros(),6);

		$data->menu = 'home';

		$this->set('metatags',$this->getMetatags(1));

		$this->set('data', $data);
	}

	public function servico($slug=''){

		$this->layout = 'public';

		$data->servico = $this->getServico($slug);
		if(sizeof($data->servico) == 0){
			throw new NotFoundException(__('Dados Inválidos'));
		}
		
		$metatags[0]['Metatag'] = $data->servico['Metatag'];
		
		//$data->servico['Produto'] = $this->handlerData($data->servico['Produto'],3);

		$this->set('metatags',$metatags);

		$this->set('location',$data->servico['Servico']['designacao']);

		$this->set('subMenuSelect', $slug);
		
		$this->set('servico', $data->servico);
	}
	
	public function servicos($page = 1){

		$this->layout = 'public';

		$numPerPage = 12;

	    $data->paginationLinks = $this->paginateResults($this->Servico, 'Servico', $numPerPage, $page);

		$data->noticias = $this->handlerData($this->getNoticias(),3);

		$data->servicos = $this->getServicos();

		$data->parceiros = $this->handlerData($this->getParceiros(),6);

		$data->menu = 'servicos';

		$this->set('metatags',$this->getMetatags(3));

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

		$this->set('metatags',$this->getMetatags(4));

		$this->set('data', $data);

	}
	
	public function findNoticia($hash = ''){

		$numPerPage = 4;
		
		$options = array('conditions' => array('Noticia.hashtag' => $hash));
		$noticia = $this->Noticia->find('first', $options);

		if(!$noticia){
			throw new NotFoundException(__('Dados Inválidos'));
		}

		$allNoticias = $this->getNoticias();

		$size = sizeof($allNoticias);

		$flag = true;
		for($i=0; $i<$size && $flag; $i++){
			if($allNoticias[$i]['Noticia']['hashtag'] == $hash) {
				$flag = false;
			}
		}

		$numPages = ($size / $numPerPage);
		$position = $i/$numPerPage;

		if(($i%$numPerPage) == 0){
			$page = $position;
		}else{
			$page = floor($position)+1;
		}
		
		$this->redirect( '/Noticias/'.$page.'#'.$hash );

	}


	public function noticias($page = 1){

		$this->layout = 'public';

		$numPerPage = 4;
		
		$data->paginationLinks = $this->paginateResults($this->Noticia, 'Noticia', $numPerPage, $page);

		$data->noticias = $this->handlerData($this->getNoticias(),3);

		$data->all_noticias = $this->getDataPaginate($this->Noticia, 'Noticia', $page, $numPerPage, true);

		$data->menu = 'noticias';

		$this->set('metatags',$this->getMetatags(5));
		
		$this->set('data', $data);

	}

	public function sobrenos(){
		
		$this->layout = 'public';

		$data->menu = 'aboutus';

		$data->noticias = $this->handlerData($this->getNoticias(),3);

		$this->set('metatags',$this->getMetatags(2));

		$this->set('data', $data);
	}


	public function contactos(){
		
		$this->layout = 'public';

		$data->menu = 'contactos';

		$data->noticias = $this->handlerData($this->getNoticias(),3);

		$this->set('metatags',$this->getMetatags(6));

		$this->set('data', $data);
	}

	private function getMetatags($pagina=null){
		$options = array('conditions' => array('Pagina.id' => $pagina));
		return $this->Pagina->find('all', $options);
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


	private function getCategoriasDicas(){
		$options = array('conditions' => array('CategoriasDica.activo' => 1));
		return $this->CategoriasDica->find('all', $options);
	}

	private function getDicas(){
		$options = array('conditions' => array('Dica.activo' => 1));
		return $this->Dica->find('all', $options);
	}

	private function getServico($slug = ''){
		$options = array('conditions' => array('Servico.activo' => 1, 'Servico.slug'=>$slug), 'recursive' => 1);
		return $this->Servico->find('first', $options);
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
