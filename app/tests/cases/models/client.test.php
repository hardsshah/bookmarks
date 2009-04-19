<?php 
/* SVN FILE: $Id$ */
/* Client Test cases generated on: 2009-01-21 22:01:31 : 1232595991*/
App::import('Model', 'Client');

class ClientTestCase extends CakeTestCase {
	var $Client = null;
	var $fixtures = array('app.client', 'app.invoice', 'app.project');

	function startTest() {
		$this->Client =& ClassRegistry::init('Client');
	}

	function testClientInstance() {
		$this->assertTrue(is_a($this->Client, 'Client'));
	}

	function testClientFind() {
		$this->Client->recursive = -1;
		$results = $this->Client->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Client' => array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'rate'  => 'Lorem ipsum dolor sit amet',
			'last_billed'  => '2009-01-21',
			'created'  => '2009-01-21 22:46:31',
			'modified'  => '2009-01-21 22:46:31'
			));
		$this->assertEqual($results, $expected);
	}
}
?>