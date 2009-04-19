<?php 
/* SVN FILE: $Id$ */
/* Post Test cases generated on: 2009-01-17 12:01:49 : 1232213089*/
App::import('Model', 'Post');

class PostTestCase extends CakeTestCase {
	var $Post = null;
	var $fixtures = array('app.post', 'app.user');

	function startTest() {
		$this->Post =& ClassRegistry::init('Post');
	}

	function testPostInstance() {
		$this->assertTrue(is_a($this->Post, 'Post'));
	}

	function testPostFind() {
		$this->Post->recursive = -1;
		$results = $this->Post->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Post' => array(
			'id'  => 1,
			'user_id'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'body'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created'  => '2009-01-17 12:24:49',
			'modified'  => '2009-01-17 12:24:49'
			));
		$this->assertEqual($results, $expected);
	}
}
?>