<?php
/* Item Test cases generated on: 2009-10-30 13:10:06 : 1256868906*/
App::import('Model', 'Item');

class ItemTestCase extends CakeTestCase {
	var $fixtures = array('app.item', 'app.item_list', 'app.user');

	function startTest() {
		$this->Item =& ClassRegistry::init('Item');
	}

	function endTest() {
		unset($this->Item);
		ClassRegistry::flush();
	}

	function testCreateItem() {
		$count = $this->Item->find('count');

		$item = array(
			'name' => 'New Item',
			'completed' => 1);
		$this->Item->create($item);
		$this->Item->save();

		$newCount = $this->Item->find('count');

		// Actual Test
		$this->assertTrue($count == $newCount - 1);
	}
	
	function testCompleteItem() {
		$item = array('name' => 'Something to do');
		$this->Item->create($item);
		$this->Item->save();
		$id = $this->Item->id;
		$this->Item->create();

		$item = $this->Item->read(null, $id);
		$this->assertTrue($item['Item']['completed'] == 0);

		$this->Item->complete($id);
		$item = $this->Item->read(null, $id);
		$this->assertTrue($item['Item']['completed'] == 1);
	}
	
	function testCompleteItemEmptyId() {
		$this->assertFalse($this->Item->complete());
		$this->assertFalse($this->Item->complete(null));
		$this->assertFalse($this->Item->complete(''));
	}
	
	function testPurgeDeleted() {
		$item = array(
			'name' => 'New Item',
			'completed' => 0);
		$this->Item->create($item);
		$this->Item->save();
		$id = $this->Item->id;

		$count = $this->Item->find('count');

		$this->Item->complete($id);
		$this->Item->purge();
		$this->assertEqual($this->Item->find('count'), $count - 1);
	}
}
?>