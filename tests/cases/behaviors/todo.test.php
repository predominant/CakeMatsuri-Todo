<?php
App::import('Core', array('AppModel', 'Model'));
App::import('Behavior', 'Todo');
//App::import('Model', array('Item'));

class TestItemModel extends CakeTestModel {
	public $useTable = false;
	public $actsAs = array('Todo');

	public $_schema = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'completed' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('engine' => 'MyISAM')	);
}

Mock::generate('AppModel', 'MockItem');

class TodoTestCase extends CakeTestCase {
	function startTest() {
		//$this->Item = ClassRegistry::init('MockItem');
		$this->Item = new MockItem(null, false, false);
	}

	function endTest() {
		unset($this->Item);
		ClassRegistry::flush();
	}

	function testCompleteItem() {
		$Item = new MockItem();
		$Item->primaryKey = 'id';
		$Item->alias = 'Item';

		$Todo = new TodoBehavior();
		$Todo->setup($Item, array('completed' => 'test_field'));

			$Item->setReturnValue('exists', true);
		
			$Item->setReturnValue('saveField', true,
				array('test_field', 1));
				
				$Item->setReturnValue('read', array(
					'Item' => array(
						'id' => 'Item-1',
						'test_field' => 0)));
		
			// $this->Item->expectOnce('find');
			// $this->Item->expectOnce('saveField');
			$this->assertTrue($Todo->complete($Item, 'Item-1'));

	}
	
	function testCompleteItemEmptyId() {
		$this->assertFalse($this->Item->complete());
		$this->assertFalse($this->Item->complete(null));
		$this->assertFalse($this->Item->complete(''));
	}
	
	function testPurgeDeleted() {
		$Item = new MockItem();
		$Todo = new TodoBehavior();
		$Todo->setup($Item, array('completed' => 'test_field'));
		
		$Item->setReturnValue(
			'deleteAll', true, array(array('test_field' => 1)));
		$this->assertTrue($Todo->purge($Item));
	}

	function testPurgeDeletedIncorrect() {
		$Item = new MockItem();
		$Todo = new TodoBehavior();
		$Todo->setup($Item, array('completed' => 'completed_field'));
		
		$Item->setReturnValue(
			'deleteAll', true, array(array('test_field' => 1)));
		$this->assertFalse($Todo->purge($Item));
	}
}
?>