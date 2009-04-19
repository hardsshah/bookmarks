<?php 
/* SVN FILE: $Id$ */
/* Invoice Fixture generated on: 2009-01-21 22:01:40 : 1232596180*/

class InvoiceFixture extends CakeTestFixture {
	var $name = 'Invoice';
	var $table = 'invoices';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'client_id' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 10),
			'start_date' => array('type'=>'date', 'null' => true, 'default' => NULL),
			'end_date' => array('type'=>'date', 'null' => true, 'default' => NULL),
			'amount_paid' => array('type'=>'float', 'null' => true, 'default' => NULL),
			'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
			'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'client_id'  => 1,
			'start_date'  => '2009-01-21',
			'end_date'  => '2009-01-21',
			'amount_paid'  => '2009-01-21',
			'created'  => '2009-01-21 22:49:40',
			'modified'  => '2009-01-21 22:49:40'
			));
}
?>