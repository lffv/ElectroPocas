<?php
App::uses('AppController', 'Controller');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

class GalleryController extends AppController {

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function index() {
		$this->set('title_for_layout', 'Canvas - Editar Galeria');
		$this->set('page', $this->Gallery->find('all'));
	}
	
	public function upload()	{
	
		//Configure::write('debug', 0);
		$this->autoRender = false;
		header('Content-type: application/json');
		
		$temp_file       = $_FILES['qqfile']['tmp_name'];
    $target_filename = $_FILES['qqfile']['name'];
    $upload_path     = Configure::read('base_upload_dir')."/app/webroot/files/".strtolower($_POST['model'])."/gallery/".$_POST['foreign_key'];
    $target_filepath = $upload_path.'/'.$target_filename;
    
    $folder = new Folder($upload_path, true, 0755);
		
    if( move_uploaded_file($temp_file, $target_filepath) )	{
    	$data = array();
    	$data['Gallery']['model'] = $_POST['model'];
    	$data['Gallery']['attachment'] = $target_filename;
    	$data['Gallery']['dir'] = $_POST['foreign_key'];
    	$data['Gallery']['active'] = 1;
    	$data['Gallery']['foreign_key'] = $_POST['foreign_key'];
    	$data['Gallery']['size'] = $_FILES['qqfile']['size'];
    	$data['Gallery']['name'] = $_FILES['qqfile']['name'];
    	$data['Gallery']['type'] = $_FILES['qqfile']['type'];

    	if( $this->Gallery->save($data) ) {
	    	$image_id = $this->Gallery->getLastInsertID();
	  		echo json_encode(array('success'=>true, 
	  													 'image_id' => $image_id, 
	  													 'model_folder' => strtolower($_POST['model']), 
	  													 'foreign_key' => $_POST['foreign_key']
	  													 ));  		
    	}else	{
	    	echo json_encode(array('success'=>false));  		
    	}
    }else {
	    echo json_encode(array('success'=>false));  		
    }
	}
	
	public function delete()	{
	
		//Configure::write('debug', 0);
		$this->autoRender = false;
		header('Content-type: application/json');
		
		if($_GET['id']) {
			$this->Gallery->id = $_GET['id'];
			if( $this->Gallery->delete() ) 
			{
	  		echo json_encode(array('success'=>true)); return;  		
    	}
    	else	
    	{
	    	echo json_encode(array('success'=>false)); return;  		
    	}
		}
		echo json_encode(array('success'=>false)); return; 		
	}
}
