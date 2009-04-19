<?php 
/* SVN FILE: $Id$ */
/* Payment Test cases generated on: 2009-01-28 18:01:50 : 1233183950*/
App::import('Model', 'Payment');

class PaymentTestCase extends CakeTestCase {
	var $Payment = null;
	var $fixtures = array('app.payment');

	function startTest() {
		$this->Payment =& ClassRegistry::init('Payment');
	}

	function testPaymentInstance() {
		$this->assertTrue(is_a($this->Payment, 'Payment'));
	}

	function testPaymentFind() {
		$this->Payment->recursive = -1;
		$results = $this->Payment->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Payment' => array(
			'id'  => 1,
			'invoice_id'  => 1,
			'amount'  => 1,
			'created'  => '2009-01-28 18:05:50',
			'modified'  => '2009-01-28 18:05:50'
			));
		$this->assertEqual($results, $expected);
	}
}
?>