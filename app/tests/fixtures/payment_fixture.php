<?php 
/* SVN FILE: $Id$ */
/* Payment Fixture generated on: 2009-01-28 18:01:50 : 1233183950*/

class PaymentFixture extends CakeTestFixture {
	var $name = 'Payment';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 12, 'key' => 'primary'),
			'invoice_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 12),
			'amount' => array('type'=>'float', 'null' => false, 'default' => NULL),
			'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'invoice_id'  => 1,
			'amount'  => 1,
			'created'  => '2009-01-28 18:05:50',
			'modified'  => '2009-01-28 18:05:50'
			));
}
?>