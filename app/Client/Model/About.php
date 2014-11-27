<?php
App::uses('AppModel', 'Model');
/**
 * Applicant Model
 *
 */
class About extends AppModel {

	public $actsAs = array(
        'Translate' => array(
            'title' => 'titleTranslation', 
            'text' => 'textTranslation', 
            'lead' => 'leadTranslation'
        )
    );

	public $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Preencha o campo Título.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'lead' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Preencha o campo Lead.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'text' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Preencha o campo Texto.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);
}
