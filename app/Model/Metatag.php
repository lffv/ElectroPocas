<?php
App::uses('AppModel', 'Model');

class Metatag extends AppModel {
	var $name = 'Metatag';
	var $displayField = 'title';

	public $belongsTo = array(
        'Pagina' => array(
            'className' => 'Pagina',
            'conditions' => '',
            'dependent' => true,
            'foreignKey' => 'foreign_key',
        ),
        'Servico' => array(
            'className' => 'Servico',
            'conditions' => '',
            'dependent' => true,
            'foreignKey' => 'foreign_key',
        ),
    );
}

?>