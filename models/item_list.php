<?php
class ItemList extends AppModel {
	public $validate = array(
		'user_id' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'name' => array(
			'notempty' => array('rule' => array('notempty')),
		),
	);

	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
		'Item' => array(
			'className' => 'Item',
			'foreignKey' => 'item_list_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>