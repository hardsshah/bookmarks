<?php 
/* SVN FILE: $Id$ */
/* LinkCategory Test cases generated on: 2009-03-08 21:03:06 : 1236562146*/
App::import('Model', 'LinkCategory');

class LinkCategoryTestCase extends CakeTestCase {
	var $LinkCategory = null;
	var $fixtures = array('app.link_category');

	function startTest() {
		$this->LinkCategory =& ClassRegistry::init('LinkCategory');
	}

	function testLinkCategoryInstance() {
		$this->assertTrue(is_a($this->LinkCategory, 'LinkCategory'));
	}

	function testLinkCategoryFind() {
		$this->LinkCategory->recursive = -1;
		$results = $this->LinkCategory->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('LinkCategory' => array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-03-08 21:29:06',
			'modified'  => '2009-03-08 21:29:06'
			));
		$this->assertEqual($results, $expected);
	}
}
?>