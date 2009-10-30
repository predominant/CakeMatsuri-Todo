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
	
	public function findCached($id, $force = false) {
		$key = $this->_key($id);
		
		if (!$force) {
			$cache = Cache::read($key);	
			
			if (!empty($cache)) { 
				return $cache;
			}
		
		}
		$result = $this->find(
			'first',
			array(
				'conditions' => array(
					$this->alias . '.' . $this->primaryKey => $id)));
					
		Cache::write($key, $result);
		
		return $result;
	}
	
	public function save($data, $validate = true, $fieldList = false) {
		$saved = parent::save($data, $validate, $fieldList);
		
		if ($saved) {
			Cache::delete($this->_key($this->id));
			$this->findCached($this->id, true);
		}
		
		return $saved;
	}
	
	protected function _key($id) {
		return $id;
	}
}
?>