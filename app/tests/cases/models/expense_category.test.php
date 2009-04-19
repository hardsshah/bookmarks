<?php 
/* SVN FILE: $Id$ */
/* ExpenseCategory Test cases generated on: 2009-03-04 18:03:41 : 1236208421*/
App::import('Model', 'ExpenseCategory');

class ExpenseCategoryTestCase extends CakeTestCase {
	var $ExpenseCategory = null;
	var $fixtures = array('app.expense_category');

	function startTest() {
		$this->ExpenseCategory =& ClassRegistry::init('ExpenseCategory');
	}

	function testExpenseCategoryInstance() {
		$this->assertTrue(is_a($this->ExpenseCategory, 'ExpenseCategory'));
	}

	function testExpenseCategoryFind() {
		$this->ExpenseCategory->recursive = -1;
		$results = $this->ExpenseCategory->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('ExpenseCategory' => array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-03-04 18:13:41',
			'modified'  => '2009-03-04 18:13:41'
			));
		$this->assertEqual($results, $expected);
	}
}
?>