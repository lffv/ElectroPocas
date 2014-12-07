<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */

	//HomePage Route
	Router::connect('/', array('controller' => 'home', 'action' => 'home'));

	//Sobre Nós Route
	Router::connect('/acerca', array('controller' => 'home', 'action' => 'sobrenos'));
	Router::connect('/Acerca', array('controller' => 'home', 'action' => 'sobrenos'));
	Router::connect('/about', array('controller' => 'home', 'action' => 'sobrenos'));
	Router::connect('/About', array('controller' => 'home', 'action' => 'sobrenos'));
	Router::connect('/aboutus', array('controller' => 'home', 'action' => 'sobrenos'));
	Router::connect('/AboutUs', array('controller' => 'home', 'action' => 'sobrenos'));
	Router::connect('/sobrenos', array('controller' => 'home', 'action' => 'sobrenos'));
	Router::connect('/SobreNos', array('controller' => 'home', 'action' => 'sobrenos'));

	//CoNTACTOS
	Router::connect('/contact', array('controller' => 'home', 'action' => 'contactos'));
	Router::connect('/Contact', array('controller' => 'home', 'action' => 'contactos'));
	Router::connect('/contactos', array('controller' => 'home', 'action' => 'contactos'));
	Router::connect('/Contactos', array('controller' => 'home', 'action' => 'contactos'));


	//Serviços
	Router::connect('/servicos', array('controller' => 'home', 'action' => 'servicos'));
	Router::connect('/Servicos', array('controller' => 'home', 'action' => 'servicos'));
	Router::connect('/servicos/:page', array('controller' => 'home', 'action' => 'servicos'),array('pass'=>array('page')));
	Router::connect('/Servicos/:page', array('controller' => 'home', 'action' => 'servicos'),array('pass'=>array('page')));
	
	//Serviço
	Router::connect('/servico/:slug', array('controller' => 'home', 'action' => 'servico'),array('pass'=>array('slug')));
	Router::connect('/Servico/:slug', array('controller' => 'home', 'action' => 'servico'),array('pass'=>array('slug')));

	//Dicas
	Router::connect('/DicasDePoupanca', array('controller' => 'home', 'action' => 'dicas'));
	Router::connect('/dicasdepoupanca', array('controller' => 'home', 'action' => 'dicas'));
	Router::connect('/dicas', array('controller' => 'home', 'action' => 'dicas'));
	Router::connect('/Dicas', array('controller' => 'home', 'action' => 'dicas'));
	
	
	Router::connect('/noticia/:hash', array('controller' => 'home', 'action' => 'findNoticia'),array('pass'=>array('hash')));
	Router::connect('/Noticia/:hash', array('controller' => 'home', 'action' => 'findNoticia'),array('pass'=>array('hash')));
	Router::connect('/noticias', array('controller' => 'home', 'action' => 'noticias'));
	Router::connect('/Noticias', array('controller' => 'home', 'action' => 'noticias'));
	Router::connect('/noticias/:page', array('controller' => 'home', 'action' => 'noticias'),array('pass'=>array('page')));
	Router::connect('/Noticias/:page', array('controller' => 'home', 'action' => 'noticias'),array('pass'=>array('page')));
	

	Router::connect('/admin', array('controller' => 'users', 'action' => 'login'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/admin/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
