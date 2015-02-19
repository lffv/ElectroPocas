<?php
App::uses('AppModel', 'Model');
/**
 * Applicant Model
 *
 */
class Servico extends AppModel {

	public $validate = array(
		'designacao' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Preencha o campo designacão do Serviço.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);

	public $hasMany = array(
        'SubServico' => array(
            'className' => 'SubServico',
            'conditions' => '',
            'order' => ''
        ),
    );

    public $hasOne = array(
        'Metatag' => array(
            'className' => 'Metatag',
            'conditions' => '',
            'dependent' => true,
            'foreignKey' => 'foreign_key',
            'conditions' => array('model' => 'Servico')
        )
    );	

}
