<?php 
/* SVN FILE: $Id$ */
/* LinkCategory Fixture generated on: 2009-03-08 21:03:06 : 1236562146*/

class LinkCategoryFixture extends CakeTestFixture {
	var $name = 'LinkCategory';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'name' => array('type'=>'string', 'null' => false, 'default' => NULL),
			'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-03-08 21:29:06',
			'modified'  => '2009-03-08 21:29:06'
			));
}
?>