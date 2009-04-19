<?php 
/* SVN FILE: $Id$ */
/* Link Test cases generated on: 2009-03-08 21:03:21 : 1236562161*/
App::import('Model', 'Link');

class LinkTestCase extends CakeTestCase {
	var $Link = null;
	var $fixtures = array('app.link');

	function startTest() {
		$this->Link =& ClassRegistry::init('Link');
	}

	function testLinkInstance() {
		$this->assertTrue(is_a($this->Link, 'Link'));
	}

	function testLinkFind() {
		$this->Link->recursive = -1;
		$results = $this->Link->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Link' => array(
			'id'  => 1,
			'link_category_id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'url'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-03-08 21:29:21',
			'modified'  => '2009-03-08 21:29:21'
			));
		$this->assertEqual($results, $expected);
	}
}
?>