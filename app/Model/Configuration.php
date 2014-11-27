<?php
App::uses('AppModel', 'Model');
/**
 * Configuration Model
 *
 */
class Configuration extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'site_email' => array(
			'notempty' => array(
				'rule' => array('email', true),
				'message' => 'Preencha o campo com um Email válido.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'price_short_movie' => array(
			'notempty' => array(
				'rule' => array('money', 'left'),
        'message' => 'Preencha o campo com um valor monetário correcto.'
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'price_full_movie' => array(
			'notempty' => array(
				'rule' => array('money', 'left'),
				'message' => 'Preencha o campo com um valor monetário correcto.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);
}
