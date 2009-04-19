<?php 
/* SVN FILE: $Id$ */
/* ExpensesController Test cases generated on: 2009-03-04 18:03:14 : 1236209054*/
App::import('Controller', 'Expenses');

class TestExpenses extends ExpensesController {
	var $autoRender = false;
}

class ExpensesControllerTest extends CakeTestCase {
	var $Expenses = null;

	function setUp() {
		$this->Expenses = new TestExpenses();
		$this->Expenses->constructClasses();
	}

	function testExpensesControllerInstance() {
		$this->assertTrue(is_a($this->Expenses, 'ExpensesController'));
	}

	function tearDown() {
		unset($this->Expenses);
	}
}
?>