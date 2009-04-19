<?php 
/* SVN FILE: $Id$ */
/* LinksController Test cases generated on: 2009-03-08 21:03:48 : 1236562428*/
App::import('Controller', 'Links');

class TestLinks extends LinksController {
	var $autoRender = false;
}

class LinksControllerTest extends CakeTestCase {
	var $Links = null;

	function setUp() {
		$this->Links = new TestLinks();
		$this->Links->constructClasses();
	}

	function testLinksControllerInstance() {
		$this->assertTrue(is_a($this->Links, 'LinksController'));
	}

	function tearDown() {
		unset($this->Links);
	}
}
?>