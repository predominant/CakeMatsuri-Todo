<?php
class Item extends AppModel {
	public $actsAs = array('Todo');
	
	public $validate = array(
		'item_list_id' => array(
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
		'ItemList' => array(
			'className' => 'ItemList',
			'foreignKey' => 'item_list_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>