<?php 
App::uses('AppModel', 'Model'); 

  class Ticket extends AppModel 
  { 
    /** 
     * Name of model 
     * 
     * @access public 
     * @var string 
     */ 
    public $name = 'Ticket'; 
     
     
    /** 
     * Hours 
     * 
     * Number of hours a ticket should last until it expires 
     * 
     * @access private 
     * @var int 
     */ 
    private $_hours = 24; 
     

    /** 
     * Create Ticket 
     * 
     * @param array $data Data to be saved 
     * @access public 
     * @return array 
     */ 
    public function generate($data = null) 
    { 
      $ticketHash = substr(Security::hash(microtime()*12345),0,12); 
       
      return $this->save(array( 
        'hash'      => $ticketHash, 
        'expires'   => date('Y-m-d H:i:s', strtotime('+'.$this->_hours.' hour')), 
        'data'      => $data 
      )); 
    } 
     
    public function regenerate($data = null) 
    { 
      $ticketHash = substr(Security::hash(microtime()*12345),0,12); 
      $record = $this->find('first', array('conditions'=>array('data'=>$data)));
      $record['Ticket']['expires'] = date('Y-m-d H:i:s', strtotime('+'.$this->_hours.' hour'));
      $record['Ticket']['modified'] = date('Y-m-d H:i:s');
      return $this->save($record); 
    } 
     
    /** 
     * Purge Tickets 
     * 
     * @access public 
     * @return boolean 
     */ 
    public function purge() 
    { 
      return $this->deleteAll('Ticket.expires <= NOW()'); 
    } 
     
     
    /** 
     * Void Ticket 
     * 
     * @param string $hash Hash to remove 
     * @access public 
     * @return boolean 
     */ 
    public function void($hash) 
    { 
      return $this->deleteAll(array('hash' => $hash)); 
    } 
     
     
    /** 
     * Check Ticket 
     * 
     * @param string $hash Hash to check 
     * @access public 
     * @return boolean 
     */ 
    public function check($hash) 
    { 
      $this->purge(); 
      $record = $this->findByHash($hash); 
      if(empty($record)) 
      { 
        return false; 
      } 
      else 
      { 
        return $record; 
      } 
    } 
    
    public function deleteTicketByData($data)	{
			$record = $this->getTicket($data);
			if($record)	{
				if( $this->delete($record['Ticket']['id']) )
				{
					return TRUE;
				}	
			}
			return FALSE;
    }
    
    public function getTicket($data)	{
	    $this->purge(); 
      $record = $this->find('first', array('conditions'=>array('data'=>$data)));
      if($record)	return $record;
      else return FALSE;  
    }
    
    public function findTicket($data)	{
	    $this->purge(); 
      $record = $this->find('first', array('conditions'=>array('data'=>$data)));
      if($record)	return TRUE;
      else return FALSE;  
    }
    
    public function getHash($data)	{
	    $this->purge(); 
      $record = $this->find('first', array('conditions'=>array('data'=>$data)));
      if($record)	return $record['Ticket']['hash'];
      else return FALSE;  
    }

    public function getData($hash)	{
	    $this->purge(); 
      $record = $this->find('first', array('conditions'=>array('hash'=>$hash)));
      if($record)	return $record['Ticket']['data'];
      else return FALSE;  
    }
     
  } 
?>