<?php
App::uses('AppModel', 'Model');
/**
 * Applicant Model
 *
 */
class Produto extends AppModel {

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

	public $belongsTo = array(
        'SubServico' => array(
            'className' => 'SubServico',
            'conditions' => '',
            'dependent' => true,
            'foreignKey' => 'sub_servico_id',
        ),
    );
	/*public $belongsTo = array(

		'Servico' => array(
			'className' => 'Servico',
			'foreignKey' => 'servico_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);*/

	public $hasOne = array(
        'Metatag' => array(
            'className' => 'Metatag',
            'conditions' => '',
            'dependent' => true,
            'foreignKey' => 'foreign_key',
            'conditions' => array('model' => 'Produto')
        )
    );

    public $hasMany = array(
        'Image' => array(
            'className' => 'Gallery',
            'foreignKey' => 'foreign_key',
            'conditions' => array(
                'Image.model' => 'Produto',
        ))
    );

}
