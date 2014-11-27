<?php 
App::uses('Component', 'Controller','CakeEmail', 'Network/Email');

class TicketComponent extends Component {
	
	public $Ticket = null;
	
	public function initialize(Controller $controller) {
		$this->Ticket = ClassRegistry::init('Ticket');
	}
	
	public function create_ticket($data)	{
		if($this->find_ticket($data))	{
			$this->Ticket->regenerate($data);			
		}
		else	{
			$this->Ticket->generate($data);
		}
	}
	
	public function find_ticket($data)	{
		return $this->Ticket->findTicket($data);
	}
		
	public function delete($data)	{
		return $this->Ticket->deleteTicketByData($data);
	}
	
	public function check($hash)	{
		return $this->Ticket->check($hash);
	}
	
	public function getData($hash)	{
		return $this->Ticket->getData($hash);
	}
	
	public function sendEmail($data)	{
		$hash	=	$this->Ticket->getHash($data);
	  $email = new CakeEmail();
	  $email->emailFormat('html');
	  $email->template('reset_password', 'canvas');
		$email->from(array('canvas@blleb.com' => 'Canvas Backend'));
		$email->to($data);
		$email->subject(' Reset Canvas Password');
		$email->viewVars(array('reset_password_link'=>'/users/redefine_password/hash:'.$hash));
		$email->viewVars(array('base_url'=>Configure::read('Canvas.base_url')));
		$email->send();
	}
}
?>