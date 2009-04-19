<?php 
/* SVN FILE: $Id$ */
/* Expense Fixture generated on: 2009-03-04 18:03:52 : 1236208432*/

class ExpenseFixture extends CakeTestFixture {
	var $name = 'Expense';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'expense_category_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10),
			'expense_frequency_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10),
			'date' => array('type'=>'date', 'null' => false, 'default' => NULL),
			'name' => array('type'=>'string', 'null' => false, 'default' => NULL),
			'description' => array('type'=>'string', 'null' => false, 'default' => NULL),
			'amount' => array('type'=>'float', 'null' => false, 'default' => NULL),
			'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'expense_category_id'  => 1,
			'expense_frequency_id'  => 1,
			'date'  => '2009-03-04',
			'name'  => 'Lorem ipsum dolor sit amet',
			'description'  => 'Lorem ipsum dolor sit amet',
			'amount'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-03-04 18:13:52',
			'modified'  => '2009-03-04 18:13:52'
			));
}
?>