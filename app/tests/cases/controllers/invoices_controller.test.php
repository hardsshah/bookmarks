<?php 
/* SVN FILE: $Id$ */
/* InvoicesController Test cases generated on: 2009-02-01 17:02:59 : 1233527579*/
App::import('Controller', 'Invoices');

class TestInvoices extends InvoicesController {
	var $autoRender = false;
}

class InvoicesControllerTest extends CakeTestCase {
	var $Invoices = null;

	function setUp() {
		$this->Invoices = new TestInvoices();
		$this->Invoices->constructClasses();
	}

	function testInvoicesControllerInstance() {
		$this->assertTrue(is_a($this->Invoices, 'InvoicesController'));
	}

	function tearDown() {
		unset($this->Invoices);
	}
}
?>