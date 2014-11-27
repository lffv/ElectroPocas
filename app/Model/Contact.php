<?php
App::uses('AppModel', 'Model');
/**
 * Simplepage Model
 *
 */
class Contact extends AppModel {

	public $validate = array(
		'email' => array(
			'notempty' => array(
				'rule' => array('email'),
				'message' => 'Insira um email válido.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'telefone' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Preencha o campo Telefone.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);
	public $hasOne = array(
        'Metatag' => array(
            'className' => 'Metatag',
            'conditions' => '',
            'dependent' => true,
            'foreignKey' => 'foreign_key',
            'conditions' => array('model' => 'Contact')
        )
  );
}
