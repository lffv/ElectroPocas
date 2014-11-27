<?php
App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
	
	var $helpers = array('Html', 'Form', 'Session', 'Time');
	var $components = array('AutoLogin', 'Session', 'Ticket', 'Email');

	
/**
 * index method
 *
 * @return void
 */
 
	public function beforeFilter() {
     parent::beforeFilter();
     
     $this->Auth->allow('logout', 'login', 'signup', 'reset_passwd', 'redefine_password');
 	}

	public function index() {
		$this->set('title_for_layout', 'Canvas - Utilizadores');
		$this->paginate = array(
        'User' => array(
            	'limit' => 15,
         			'order' => array(
         			'User.created' => 'desc',
            ),
        ),
    );
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * login method
 *
 * @return void
 */
	public function login() {
	$this->set('title_for_layout', 'Canvas - Entrar');
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
			$this->User->id = $this->Auth->user('id');
							$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
        } else {
        	$this->Session->setFlash(__('Email ou password é incorrecto.'), 'flash_error', array(), 'auth');
        }
    }
		else {
			if ( $this->Auth->user() )
          		$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
		}
		$this->layout = 'login';
	}

	public function signup() {
		$this->set('title_for_layout', 'Canvas - Sign Up');
    	if ($this->request->is('post')) {
			$this->User->create();
			$this->request->data['User']['group_id'] = 15;
			$this->request->data['User']['active'] = 1;
			if ($this->User->save($this->request->data)) {
				$id = $this->User->id;
				$this->request->data['User'] = array_merge($this->request->data['User'], array('id' =>$id));
				if ($this->Auth->login()) {
					$this->User->id = $this->Auth->user('id');
					$this->Session->setFlash(__('Account created. You can now try Canvas.'), 'flash_success', array(), 'auth');
					return $this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
		        } else {
		            $this->Session->setFlash(__('There was a problem logging you automatically. Please try manually.'), 'flash_error', array(), 'auth');
					return $this->redirect(array('controller' => 'users', 'action' => 'login'));
		        }
			} else {
				$this->Session->setFlash(__('The account could not be created. Please, try again.'), 'flash_error');
			}
		}	
		else {
				
		}
		$this->layout = 'login';
	}
	
	public function logout() {
	    $this->redirect($this->Auth->logout());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Canvas - Add User');
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('O utilizador foi criado.'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível criar um novo utilizador. Por favor, tente novamente.'), 'flash_error');
			}
		}
		$this->set('groups', $this->User->Group->find('list'));        
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('title_for_layout', 'Canvas - Editar Utilizador');
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Utilizador Inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$fields = array_keys($this->request->data['User']);
			if ( empty($this->request->data['User']['password']) )
			{
				$fields = array_diff($fields, array('password'));
			}
			if ($this->User->save($this->data, true, $fields)) {
				$this->Session->setFlash(__('O utilizador foi guardado.'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível guardar o utilizador. Por favor, tente novamente.'), 'flash_error');
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
			$this->set('groups', $this->User->Group->find('list'));
			$this->request->data['User']['password'] = null;
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Utilizador Inválido'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('Utilizador apagado com sucesso.'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ocorreu um problema ao apagar o Utilizador.'), 'flash_error');
		$this->redirect(array('action' => 'index'));
	}


	public function reset_passwd() {
		$this->set('title_for_layout', 'Canvas - Reset Password');
		
		if ($this->request->is('post') || $this->request->is('put')) {
			$fields = array_keys($this->request->data['User']);
			if ( empty($this->request->data['User']['email']) )
      {
	      $this->Session->setFlash(__('Please insert your email.'), 'flash_error', array(), 'auth');
      }
      else	{
	      $user = $this->User->find('first', array('conditions'=> array('User.email'=>$this->request->data['User']['email'])));
	      if($user)	{
		      $this->Ticket->create_ticket($user['User']['email']);
		      $this->Ticket->sendEmail($user['User']['email']);

		      $this->Session->setFlash(__('Check your email for more info on how to reset your password.'), 'flash_success', array(), 'auth');  
	      }else	{
		    	$this->Session->setFlash(__('There are no users with this email.'), 'flash_error', array(), 'auth');  
	      }
      }
		}
		$this->layout = 'login';
	}
	
	public function redefine_password() {
		if ($this->request->is('post') || $this->request->is('put')) {
			if ( empty($this->request->data['User']['password']) || empty($this->request->data['User']['retype_password']) )	{
				$this->Session->setFlash(__('The fields bellow are required.'), 'flash_error', array(), 'auth');
				$this->set('user_id' , $this->request->data['User']['id']);
			}else	{
				if( $this->request->data['User']['password'] != $this->request->data['User']['retype_password'] )	{
					$this->Session->setFlash(__('The password fields do not match.'), 'flash_error', array(), 'auth');		
					$this->set('user_id' , $this->request->data['User']['id']);
				}
				else
				{
					$user = $this->User->find('first', array('conditions'=>array('User.id' => $this->data['User']['id'])));
					$user['User']['password'] = $this->data['User']['password'];
					if(	$this->User->save($user, false)	)	{
						$this->Ticket->delete($user['User']['email']);
						$this->Session->setFlash(__('Your password has been redefined. Please login.'), 'flash_success', array(), 'auth');
						$this->redirect(array('controller'=>'users', 'action' => 'login'));		
					}
					else
					{
						$this->Session->setFlash(__('There was a problem reseting your password.'), 'flash_error', array(), 'auth');
					}
				}
			}
		}
		else	{
			if( isset($this->params['named']['hash']) )	{
				if( !$this->Ticket->check( $this->params['named']['hash']) )	{
					$this->Session->setFlash(__('The ticket has expired or do not exist. Please reset your password again.'), 'flash_error', array(), 'auth');
					$this->redirect(array('controller'=>'users', 'action' => 'reset_passwd'));
				}else	{
					$email = $this->Ticket->getData($this->params['named']['hash']);
					$user = $this->User->find('first', array('conditions'=>array('email'=>$email) ) );
					$this->set('user_id' , $user['User']['id']);
				}
			}
			else
			{
				$this->redirect(array('controller'=>'users', 'action' => 'login'));
			}
		}
	}
}
