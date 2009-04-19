<?php 
/* SVN FILE: $Id$ */
/* HourlyLineItemsController Test cases generated on: 2009-02-01 00:02:32 : 1233466952*/
App::import('Controller', 'HourlyLineItems');

class TestHourlyLineItems extends HourlyLineItemsController {
	var $autoRender = false;
}

class HourlyLineItemsControllerTest extends CakeTestCase {
	var $HourlyLineItems = null;

	function setUp() {
		$this->HourlyLineItems = new TestHourlyLineItems();
		$this->HourlyLineItems->constructClasses();
	}

	function testHourlyLineItemsControllerInstance() {
		$this->assertTrue(is_a($this->HourlyLineItems, 'HourlyLineItemsController'));
	}

	function tearDown() {
		unset($this->HourlyLineItems);
	}
}
?>