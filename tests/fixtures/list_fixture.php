<?php
/* List Fixture generated on: 2009-10-30 12:10:01 : 1256867461 */
class ListFixture extends CakeTestFixture {
	var $name = 'List';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'user_id' => array('column' => 'user_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 'List-1',
			'user_id' => 'User-1',
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2009-10-30 12:51:01',
			'modified' => '2009-10-30 12:51:01'
		),
		array(
			'id' => 'List-2',
			'user_id' => 'User-1',
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2009-10-30 12:51:01',
			'modified' => '2009-10-30 12:51:01'
		),
	);
}
?>