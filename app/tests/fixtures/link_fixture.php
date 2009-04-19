<?php 
/* SVN FILE: $Id$ */
/* Link Fixture generated on: 2009-03-08 21:03:21 : 1236562161*/

class LinkFixture extends CakeTestFixture {
	var $name = 'Link';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'link_category_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10),
			'name' => array('type'=>'string', 'null' => false, 'default' => NULL),
			'url' => array('type'=>'string', 'null' => false, 'default' => NULL),
			'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'link_category_id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'url'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-03-08 21:29:21',
			'modified'  => '2009-03-08 21:29:21'
			));
}
?>