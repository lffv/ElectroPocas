<?php
App::uses('AppModel', 'Model');
/**
 * Applicant Model
 *
 */
class TipoNoticia extends AppModel {

	public $hasMany = array(
        'Noticia' => array(
            'className' => 'Noticia',
            'conditions' => '',
            'order' => ''
        ),
    );

}
