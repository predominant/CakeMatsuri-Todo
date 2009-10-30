<?php
class Item extends AppModel {
	public $validate = array(
		'list_id' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'name' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'completed' => array(
			'boolean' => array('rule' => array('boolean')),
		),
	);

	public $belongsTo = array(
		'List' => array(
			'className' => 'List',
			'foreignKey' => 'list_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>