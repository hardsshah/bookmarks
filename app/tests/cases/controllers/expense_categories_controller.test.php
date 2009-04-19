<?php 
/* SVN FILE: $Id$ */
/* ExpenseCategoriesController Test cases generated on: 2009-03-04 18:03:42 : 1236208422*/
App::import('Controller', 'ExpenseCategories');

class TestExpenseCategories extends ExpenseCategoriesController {
	var $autoRender = false;
}

class ExpenseCategoriesControllerTest extends CakeTestCase {
	var $ExpenseCategories = null;

	function setUp() {
		$this->ExpenseCategories = new TestExpenseCategories();
		$this->ExpenseCategories->constructClasses();
	}

	function testExpenseCategoriesControllerInstance() {
		$this->assertTrue(is_a($this->ExpenseCategories, 'ExpenseCategoriesController'));
	}

	function tearDown() {
		unset($this->ExpenseCategories);
	}
}
?>