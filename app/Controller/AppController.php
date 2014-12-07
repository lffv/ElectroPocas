<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $uses = array('Noticia');
	public $components = array(
//			'DebugKit.Toolbar',
			'Acl',
			'Session',
		    'Auth' => array(
					  'autoRedirect' => true,
					  'loginRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
	          'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),	
		        'loginAction' => array(
		            'controller' => 'users',
		            'action' => 'login'
		            //'plugin' => 'users'
		        ),
		        'authError' => 'You are not allowed to access that area.',
						'flash'=> array(
							'element'=>'flash_error',
							'key'=>'auth',
							'params'=>array()
						),
		        'authenticate' => array(
		            'Form' => array(
		                'fields' => array('username' => 'email'),
										'scope' => array('active' => 1)
		            ),
		        ),
						'authorize' => array(
	  						'Controller',
								'Actions' => array('actionPath' => 'controllers')
						)
		    )
	);
	
	function isAuthorized($user) {
			//return false;
	    return $this->Auth->loggedIn();
	}
	
	public function beforeFilter() {
		if( isset($_GET['sel']) ) {
			$sel = $_GET['sel'];
			$this->Session->write('Menu.Select', $sel);
		}
		
		$mSel = $this->Session->read('Menu.Select');
		$this->Auth->allow(array('findNoticia','home', 'servicos', 'dicas', 'noticias', 'sobrenos', 'contactos', 'servico'));
		$this->set('mSel', $mSel);

		$options = array('conditions' => array('Noticia.activo' => 1), 'order'=> array('Noticia.data DESC'), 'limit' => 3);
		$this->set('noticiasFooter', $this->Noticia->find('all', $options));
		
  }
}
