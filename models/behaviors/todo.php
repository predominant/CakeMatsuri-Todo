<?php
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
		
		$Model->read(null, $id);
		$Model->saveField($this->__settings[$Model->alias]['completed'], 1);
		return true;
	}
	
	public function purge($Model) {
		$Model->deleteAll(array($this->__settings[$Model->alias]['completed'] => 1));
	}
}
?>