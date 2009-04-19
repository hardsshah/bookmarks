<?php 
/* SVN FILE: $Id$ */
/* Project Test cases generated on: 2009-01-21 22:01:49 : 1232596249*/
App::import('Model', 'Project');

class ProjectTestCase extends CakeTestCase {
	var $Project = null;
	var $fixtures = array('app.project', 'app.client', 'app.hourly_line_item');

	function startTest() {
		$this->Project =& ClassRegistry::init('Project');
	}

	function testProjectInstance() {
		$this->assertTrue(is_a($this->Project, 'Project'));
	}

	function testProjectFind() {
		$this->Project->recursive = -1;
		$results = $this->Project->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Project' => array(
			'id'  => 1,
			'reference_code'  => 'Lorem ipsum dolor sit amet',
			'client_id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'description'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-01-21 22:50:49',
			'modified'  => '2009-01-21 22:50:49'
			));
		$this->assertEqual($results, $expected);
	}
}
?>