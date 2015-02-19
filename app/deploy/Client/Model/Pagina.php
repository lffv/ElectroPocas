<?php
App::uses('AppModel', 'Model');
/**
 * Applicant Model
 *
 */
class Pagina extends AppModel {

	/*
	public $validate = array(
		'designacao' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Preencha o campo designacão do Produto.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

	);
	*/

	public $hasOne = array(
        'Metatag' => array(
            'className' => 'Metatag',
            'conditions' => '',
            'dependent' => true,
            'foreignKey' => 'foreign_key',
            'conditions' => array('model' => 'Pagina')
        )
    );

}
