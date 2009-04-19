<?php 
/* SVN FILE: $Id$ */
/* RolesController Test cases generated on: 2009-02-01 00:02:44 : 1233467024*/
App::import('Controller', 'Roles');

class TestRoles extends RolesController {
	var $autoRender = false;
}

class RolesControllerTest extends CakeTestCase {
	var $Roles = null;

	function setUp() {
		$this->Roles = new TestRoles();
		$this->Roles->constructClasses();
	}

	function testRolesControllerInstance() {
		$this->assertTrue(is_a($this->Roles, 'RolesController'));
	}

	function tearDown() {
		unset($this->Roles);
	}
}
?>