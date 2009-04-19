<?php 
/* SVN FILE: $Id$ */
/* Project Fixture generated on: 2009-01-21 22:01:49 : 1232596249*/

class ProjectFixture extends CakeTestFixture {
	var $name = 'Project';
	var $table = 'projects';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'reference_code' => array('type'=>'string', 'null' => true, 'default' => NULL),
			'client_id' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 10),
			'name' => array('type'=>'string', 'null' => true, 'default' => NULL),
			'description' => array('type'=>'string', 'null' => true, 'default' => NULL),
			'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
			'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'reference_code'  => 'Lorem ipsum dolor sit amet',
			'client_id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'description'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-01-21 22:50:49',
			'modified'  => '2009-01-21 22:50:49'
			));
}
?>