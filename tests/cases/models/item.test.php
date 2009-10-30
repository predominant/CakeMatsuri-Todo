<?php
/* Item Test cases generated on: 2009-10-30 12:10:01 : 1256867461*/
App::import('Model', 'Item');

class ItemTestCase extends CakeTestCase {
	var $fixtures = array('app.item', 'app.list', 'app.user');

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
}
?>