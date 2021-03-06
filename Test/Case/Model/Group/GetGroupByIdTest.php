<?php
/**
 * Group::getGroupById()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuna Miyashita <butackle@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('GroupsModelTestBase', 'Groups.Test/Case');

/**
 * Group::getGroupById()のテスト
 *
 * @author Yuna Miyashita <butackle@gmail.com>
 * @package NetCommons\Groups\Test\Case\Model\Group
 */
class GroupGetGroupByIdTest extends GroupsModelTestBase {

/**
 * Fixtures Setting
 *
 * @param string $name
 * @param array $data
 * @param string $dataName
 * @var array
 */
	public function __construct($name = null, array $data = array(), $dataName = '') {
		$this->fixtures = array_merge(
			$this->fixtures,
			[
				'plugin.groups.group4_users_test',
				'plugin.groups.groups_user4_users_test'
			]
		);
		parent::__construct($name, $data, $dataName);
	}

/**
 * getGroupById()のテスト
 *
 * @dataProvider dataProviderGetGroupById
 * @param $groupId
 * @return void
 */
	public function testGetGroupById($groupId = 1) {
		$actualGroups = $this->_classGroup->getGroupById($groupId);

		//返り値が空の時の確認
		if (!in_array($groupId, [1, 2])) {
			$this->assertEquals(
				array('GroupsUsersDetail' => []),
				$actualGroups,
				'想定と違う値が返っています'
			);
			return;
		}
		//ユーザ情報確認
		$this->_assertGroupsUsersDetail($groupId, $actualGroups['GroupsUsersDetail']);
		//グループ情報確認
		unset($actualGroups['GroupsUsersDetail']);
		$this->assertEquals(
			$this->_group->findById($groupId),
			$actualGroups,
			'想定と違う値が返っています'
		);
	}

/**
 * testGetGroupById用dataProvider
 * 
 * ### 戻り値
 *  - id:	グループID
 */
	public function dataProviderGetGroupById() {
		return array(
			[''],
			[1],
			[2],
			[999]
		);
	}
}
