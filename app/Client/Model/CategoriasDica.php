<?php
App::uses('AppModel', 'Model');
/**
 * Applicant Model
 *
 */
class CategoriasDica extends AppModel {

	public $validate = array(
		'designacao' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Preencha o campo designacão do Categoria.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);

	public $hasMany = array(
        'dica' => array(
            'className' => 'Dica',
            'conditions' => '',
            'order' => ''
        ),
    );

}
