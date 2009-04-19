<?php 
/* SVN FILE: $Id$ */
/* PaymentsController Test cases generated on: 2009-02-01 17:02:12 : 1233527652*/
App::import('Controller', 'Payments');

class TestPayments extends PaymentsController {
	var $autoRender = false;
}

class PaymentsControllerTest extends CakeTestCase {
	var $Payments = null;

	function setUp() {
		$this->Payments = new TestPayments();
		$this->Payments->constructClasses();
	}

	function testPaymentsControllerInstance() {
		$this->assertTrue(is_a($this->Payments, 'PaymentsController'));
	}

	function tearDown() {
		unset($this->Payments);
	}
}
?>