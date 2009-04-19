<?php 
/* SVN FILE: $Id$ */
/* HourlyLineItem Test cases generated on: 2009-01-21 22:01:15 : 1232596095*/
App::import('Model', 'HourlyLineItem');

class HourlyLineItemTestCase extends CakeTestCase {
	var $HourlyLineItem = null;
	var $fixtures = array('app.hourly_line_item', 'app.project');

	function startTest() {
		$this->HourlyLineItem =& ClassRegistry::init('HourlyLineItem');
	}

	function testHourlyLineItemInstance() {
		$this->assertTrue(is_a($this->HourlyLineItem, 'HourlyLineItem'));
	}

	function testHourlyLineItemFind() {
		$this->HourlyLineItem->recursive = -1;
		$results = $this->HourlyLineItem->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('HourlyLineItem' => array(
			'id'  => 1,
			'date'  => '2009-01-21',
			'project_id'  => 1,
			'description'  => 'Lorem ipsum dolor sit amet',
			'hours'  => 'Lorem ipsum dolor sit amet',
			'rate'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-01-21 22:48:15',
			'modified'  => '2009-01-21 22:48:15'
			));
		$this->assertEqual($results, $expected);
	}
}
?>