<?php 
/* SVN FILE: $Id$ */
/* ExpenseFrequenciesController Test cases generated on: 2009-03-04 18:03:22 : 1236208402*/
App::import('Controller', 'ExpenseFrequencies');

class TestExpenseFrequencies extends ExpenseFrequenciesController {
	var $autoRender = false;
}

class ExpenseFrequenciesControllerTest extends CakeTestCase {
	var $ExpenseFrequencies = null;

	function setUp() {
		$this->ExpenseFrequencies = new TestExpenseFrequencies();
		$this->ExpenseFrequencies->constructClasses();
	}

	function testExpenseFrequenciesControllerInstance() {
		$this->assertTrue(is_a($this->ExpenseFrequencies, 'ExpenseFrequenciesController'));
	}

	function tearDown() {
		unset($this->ExpenseFrequencies);
	}
}
?>