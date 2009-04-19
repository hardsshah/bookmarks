<?php 
/* SVN FILE: $Id$ */
/* Client Fixture generated on: 2009-01-21 22:01:31 : 1232595991*/

class ClientFixture extends CakeTestFixture {
	var $name = 'Client';
	var $table = 'clients';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'name' => array('type'=>'string', 'null' => true, 'default' => NULL),
			'rate' => array('type'=>'float', 'null' => true, 'default' => NULL),
			'last_billed' => array('type'=>'date', 'null' => true, 'default' => NULL),
			'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
			'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'rate'  => 'Lorem ipsum dolor sit amet',
			'last_billed'  => '2009-01-21',
			'created'  => '2009-01-21 22:46:31',
			'modified'  => '2009-01-21 22:46:31'
			));
}
?>