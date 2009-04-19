<?php 
/* SVN FILE: $Id$ */
/* LinkCategoriesController Test cases generated on: 2009-03-08 21:03:07 : 1236562147*/
App::import('Controller', 'LinkCategories');

class TestLinkCategories extends LinkCategoriesController {
	var $autoRender = false;
}

class LinkCategoriesControllerTest extends CakeTestCase {
	var $LinkCategories = null;

	function setUp() {
		$this->LinkCategories = new TestLinkCategories();
		$this->LinkCategories->constructClasses();
	}

	function testLinkCategoriesControllerInstance() {
		$this->assertTrue(is_a($this->LinkCategories, 'LinkCategoriesController'));
	}

	function tearDown() {
		unset($this->LinkCategories);
	}
}
?>