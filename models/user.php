<?php
class User extends AppModel {
	public $validate = array(
		'username' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'password' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'email' => array(
			'email' => array('rule' => array('email')),
		),
	);
	
	public $hasMany = array(
		'ItemList' => array(
			'className' => 'ItemList',
			'foreignKey' => 'user_id',
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