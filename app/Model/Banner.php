<?php
App::uses('AppModel', 'Model');
/**
 * Simplepage Model
 *
 */
class Banner extends AppModel {
    
    public $actsAs = array(
        'Upload.Upload' => array(
            'banner' => array(
                'fields' => array(
                    'dir' => 'image_dir'
                )
            ),
            'banner_mobile' => array(
                'fields' => array(
                    'dir' => 'image_dir'
                )
            )
        )
    );
    public $validate = array(
		'lead' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Preencha o campo Texto Banner.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'link' => array(
			'url' => array(
				'rule' => array('url', true),
        'message' => 'Link inválido.',
        'allowEmpty' => true,
			),
    )
	);
}