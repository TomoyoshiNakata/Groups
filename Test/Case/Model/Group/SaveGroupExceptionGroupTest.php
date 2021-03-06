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
 * saveGroup()のExceptionテスト
 *
 * @return void
 */
	public function testSaveGroup() {
		$this->setExpectedException('InternalErrorException');
		$this->_classGroup->saveGroup(array(
			'Group' => [
				'id' => 9999,
				'name' => 'テストInsert',
			],
			'GroupsUser' => [ ['user_id' => '2'], ['user_id' => '3'] ]
		));
	}
}
