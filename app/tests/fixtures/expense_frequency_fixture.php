<?php 
/* SVN FILE: $Id$ */
/* ExpenseFrequency Fixture generated on: 2009-03-04 18:03:15 : 1236208395*/

class ExpenseFrequencyFixture extends CakeTestFixture {
	var $name = 'ExpenseFrequency';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'name' => array('type'=>'string', 'null' => false, 'default' => NULL),
			'cycles_per_year' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 5),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'cycles_per_year'  => 1
			));
}
?>