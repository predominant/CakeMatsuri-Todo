<?php
/* Item Fixture generated on: 2009-10-30 12:10:01 : 1256867461 */
class ItemFixture extends CakeTestFixture {
	var $name = 'Item';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'list_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'completed' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'list_id' => array('column' => 'list_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 'Item-1',
			'list_id' => 'List-1',
			'name' => 'item one',
			'completed' => 0,
			'created' => '2009-10-30 12:51:01',
			'modified' => '2009-10-30 12:51:01'
		),
		array(
			'id' => 'Item-2',
			'list_id' => 'List-1',
			'name' => 'item two',
			'completed' => 0,
			'created' => '2009-10-30 12:51:01',
			'modified' => '2009-10-30 12:51:01'
		),
		array(
			'id' => 'Item-3',
			'list_id' => 'List-2',
			'name' => 'item two',
			'completed' => 0,
			'created' => '2009-10-30 12:51:01',
			'modified' => '2009-10-30 12:51:01'
		),
	);
}
?>