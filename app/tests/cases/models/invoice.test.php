<?php 
/* SVN FILE: $Id$ */
/* Invoice Test cases generated on: 2009-01-21 22:01:40 : 1232596180*/
App::import('Model', 'Invoice');

class InvoiceTestCase extends CakeTestCase {
	var $Invoice = null;
	var $fixtures = array('app.invoice', 'app.client');

	function startTest() {
		$this->Invoice =& ClassRegistry::init('Invoice');
	}

	function testInvoiceInstance() {
		$this->assertTrue(is_a($this->Invoice, 'Invoice'));
	}

	function testInvoiceFind() {
		$this->Invoice->recursive = -1;
		$results = $this->Invoice->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Invoice' => array(
			'id'  => 1,
			'client_id'  => 1,
			'start_date'  => '2009-01-21',
			'end_date'  => '2009-01-21',
			'amount_paid'  => '2009-01-21',
			'created'  => '2009-01-21 22:49:40',
			'modified'  => '2009-01-21 22:49:40'
			));
		$this->assertEqual($results, $expected);
	}
}
?>