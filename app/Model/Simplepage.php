<?php
App::uses('AppModel', 'Model');
/**
 * Simplepage Model
 *
 */
class Simplepage extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Por favor preencha o título.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sub_title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Por favor preencha o sub-título.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'lead' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Por favor preencha o Lead.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		)
	);
	public $actsAs = array(
        'Upload.Upload' => array(
            'video_thumb' => array(
                'fields' => array(
                    'dir' => 'image_dir'
                )
            )
        )
    );
}
