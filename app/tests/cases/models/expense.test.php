<?php 
/* SVN FILE: $Id$ */
/* Expense Test cases generated on: 2009-03-04 18:03:52 : 1236208432*/
App::import('Model', 'Expense');

class ExpenseTestCase extends CakeTestCase {
	var $Expense = null;
	var $fixtures = array('app.expense');

	function startTest() {
		$this->Expense =& ClassRegistry::init('Expense');
	}

	function testExpenseInstance() {
		$this->assertTrue(is_a($this->Expense, 'Expense'));
	}

	function testExpenseFind() {
		$this->Expense->recursive = -1;
		$results = $this->Expense->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Expense' => array(
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
		$this->assertEqual($results, $expected);
	}
}
?>