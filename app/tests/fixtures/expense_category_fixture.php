<?php 
/* SVN FILE: $Id$ */
/* ExpenseCategory Fixture generated on: 2009-03-04 18:03:41 : 1236208421*/

class ExpenseCategoryFixture extends CakeTestFixture {
	var $name = 'ExpenseCategory';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'name' => array('type'=>'string', 'null' => false, 'default' => NULL),
			'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-03-04 18:13:41',
			'modified'  => '2009-03-04 18:13:41'
			));
}
?>