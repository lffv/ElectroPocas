<?php
App::uses('AppModel', 'Model');
/**
 * Applicant Model
 *
 */
class Parceiro extends AppModel {


	public $validate = array(
		'imagem' => array(
			/* 
			'rule1'=>array(
				'rule' => array('extension',array('jpg','png','gif')),
				'required' => 'create',
				'message' => 'Select Valid Image1',
				'on' => 'update',
				'last'=>true
		       
		       'rule' => array('extension',array('jpeg','jpg','png','gif')),
		        'required' => 'create',
		        'allowEmpty' => true,
		        'message' => 'Select Valid Image',
		        'on' => 'create',
		        'last'=>true
		        
		    ),
		    'rule2'=>array(
		    	'rule' => array('extension',array('jpg','jpeg','png','gif')),
				'required' => 'update',
				'message' => 'Select Valid Image2',
				'on' => 'update',
				'last'=>true
		        'rule' => array('extension',array('jpeg','jpg','png','gif')),
		        'message' => 'Select Valid Image',
		        'allowEmpty' => true,
		        'on' => 'update',
		        "last"=>true
		        
		    ),
		    */
		),
		'link' => array(
			
			'rule1' => array(
	            'rule' => array('notempty'),
	            'message' => 'Preencha o campo Link do Parceiro.',
	            // extra keys like on, required, etc. go here...
	        ),
	        'rule2' => array(
	            'rule' => array('url'),
	            'message' => 'O campo deve ser um link url.',
	            // extra keys like on, required, etc. go here...
	        )
			
			//'allowEmpty' => false,
			//'required' => false,
			//'last' => false, // Stop validation after this rule
			//'on' => 'create', // Limit validation to 'create' or 'update' operations
			
		),
		'designacao' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Preencha o campo designacão do Parceiro.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);
}
