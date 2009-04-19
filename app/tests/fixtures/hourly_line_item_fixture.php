<?php 
/* SVN FILE: $Id$ */
/* HourlyLineItem Fixture generated on: 2009-01-21 22:01:15 : 1232596095*/

class HourlyLineItemFixture extends CakeTestFixture {
	var $name = 'HourlyLineItem';
	var $table = 'hourly_line_items';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'date' => array('type'=>'date', 'null' => true, 'default' => NULL),
			'project_id' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 10),
			'description' => array('type'=>'string', 'null' => true, 'default' => NULL),
			'hours' => array('type'=>'float', 'null' => true, 'default' => NULL),
			'rate' => array('type'=>'float', 'null' => true, 'default' => NULL),
			'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
			'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'date'  => '2009-01-21',
			'project_id'  => 1,
			'description'  => 'Lorem ipsum dolor sit amet',
			'hours'  => 'Lorem ipsum dolor sit amet',
			'rate'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-01-21 22:48:15',
			'modified'  => '2009-01-21 22:48:15'
			));
}
?>