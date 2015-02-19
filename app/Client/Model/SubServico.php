<?php
App::uses('AppModel', 'Model');
/**
 * Applicant Model
 *
 */
class SubServico extends AppModel {


	public $hasMany = array(
        'Produto' => array(
            'className' => 'Produto',
            'conditions' => '',
            'order' => ''
        ),
    );

}
