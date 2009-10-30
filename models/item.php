<?php
class Item extends AppModel {
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
	
	public function complete($id = null) {
		if (empty($id) || !$this->exists($id)) {
			return false;
		}
		
		$this->read(null, $id);
		$this->saveField('completed', 1);
		return true;
	}
}
?>