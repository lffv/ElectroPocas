<?php
App::uses('AppModel', 'Model');
/**
 * Applicant Model
 *
 */
class Noticia extends AppModel {

/*	
	public $belongsTo = array(
		'TipoNoticia' => array(
			'className' => 'TipoNoticia',
			'foreignKey' => 'tipo_noticia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
*/
	public $hasMany = array(
        'Image' => array(
            'className' => 'Gallery',
            'foreignKey' => 'foreign_key',
            'conditions' => array(
                'Image.model' => 'Noticia',
        ))
    );
}
