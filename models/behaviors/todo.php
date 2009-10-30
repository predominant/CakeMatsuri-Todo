<?php
/**
 * Todo Behavior
 *
 */
class TodoBehavior extends ModelBehavior {
	private $__default = array(
		'completed' => 'completed');
		
	private $__settings = array();
	
	public function setup($Model, $settings = array()) {
		$this->__settings[$Model->alias] = array_merge(
			$this->__default,
			$settings);
	}

	public function complete($Model, $id = null) {
		if (empty($id) || !$Model->exists($id)) {
			return false;
		}

		$item = $Model->find(
			'first',
			array(
				'fields' => array($Model->primaryKey),
				'conditions' => array($Model->primaryKey => $id)));
		$Model->id = $item[$Model->alias][$Model->primaryKey];
		$Model->saveField($this->__settings[$Model->alias]['completed'], 1);
		return true;
	}
	
	public function purge($Model) {
		return $Model->deleteAll(array(
			$this->__settings[$Model->alias]['completed'] => 1
		));
	}
}
?>