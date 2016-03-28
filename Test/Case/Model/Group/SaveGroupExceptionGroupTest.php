<?php
/**
 * Group::saveGroup()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuna Miyashita <butackle@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('GroupsModelTestBase', 'Groups.Test/Case');

/**
 * Group::saveGroup()のテスト
 *
 * @author Yuna Miyashita <butackle@gmail.com>
 * @package NetCommons\Groups\Test\Case\Model\Group
 */
class GroupSaveGroupExceptionGroupTest extends GroupsModelTestBase {

/**
 * Fixtures Setting
 *
 * @param string $name
 * @param array $data
 * @param string $dataName
 * @var array
 */
	public function __construct($name = null, array $data = array(), $dataName = '') {
		$this->fixtures[] = 'plugin.groups.group_exception';

		parent::__construct($name, $data, $dataName);
	}

/**
 * saveGroup()のExceptionテスト
 *
 * @return void
 */
	public function testSaveGroup() {
		$this->setExpectedException('InternalErrorException');
		$this->_classGroup->saveGroup(array(
			'Group' => [
				'name' => 'TestInsert',
			],
			'GroupsUser' => [
				['user_id' => '1'], ['user_id' => '3']
			]
		));
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		parent::tearDown();

		array_pop($this->fixtures);
		$this->fixtureManager->shutdown();
	}
}
