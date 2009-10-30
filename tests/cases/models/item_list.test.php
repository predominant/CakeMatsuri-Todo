<?php
/* ItemList Test cases generated on: 2009-10-30 13:10:29 : 1256868929*/
App::import('Model', 'ItemList');

class ItemListTestCase extends CakeTestCase {
	var $fixtures = array('app.item_list', 'app.user', 'app.item');

	function startTest() {
		$this->ItemList =& ClassRegistry::init('ItemList');
	}

	function endTest() {
		unset($this->ItemList);
		ClassRegistry::flush();
	}

}
?>