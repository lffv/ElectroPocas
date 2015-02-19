<?php
App::uses('AppModel', 'Model');
/**
 * Applicant Model
 *
 */
class Dica extends AppModel {

	
	public $belongsTo = array(
		'Categoria' => array(
			'className' => 'Categorias_dica',
			'foreignKey' => 'categorias_dica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
