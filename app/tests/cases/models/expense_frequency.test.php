<?php 
/* SVN FILE: $Id$ */
/* ExpenseFrequency Test cases generated on: 2009-03-04 18:03:15 : 1236208395*/
App::import('Model', 'ExpenseFrequency');

class ExpenseFrequencyTestCase extends CakeTestCase {
	var $ExpenseFrequency = null;
	var $fixtures = array('app.expense_frequency');

	function startTest() {
		$this->ExpenseFrequency =& ClassRegistry::init('ExpenseFrequency');
	}

	function testExpenseFrequencyInstance() {
		$this->assertTrue(is_a($this->ExpenseFrequency, 'ExpenseFrequency'));
	}

	function testExpenseFrequencyFind() {
		$this->ExpenseFrequency->recursive = -1;
		$results = $this->ExpenseFrequency->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('ExpenseFrequency' => array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'cycles_per_year'  => 1
			));
		$this->assertEqual($results, $expected);
	}
}
?>