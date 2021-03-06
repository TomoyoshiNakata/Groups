<?php
/**
 * GroupUserListHelper::convertGroupUserListForDisplay()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuna Miyashita <butackle@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('GroupsTestBase', 'Groups.Test/Case');

/**
 * GroupUserListHelper::convertGroupUserListForDisplay()のテスト
 *
 * @author Yuna Miyashita <butackle@gmail.com>
 * @package NetCommons\Groups\Test\Case\View\Helper\GroupUserListHelper
 */
class GroupUserListHelperConvertGroupUserListForDisplayTest extends GroupsTestBase {

/**
 * convertGroupUserListForDisplay()のテスト
 *
 * @param array $groupUsers
 * @return void
 */
	public function testConvertGroupUserListForDisplay($groupUsers = []) {
		$view = $this->_createViewClass();
		$groupUsers = [
				['User' => ['id' => 1]],
				['User' => ['id' => 3]],
				['User' => ['id' => 2]],
				['User' => ['id' => 1]],
				['User' => ['name' => 4]],
			];

		$expectedUserIds = array();
		foreach ($groupUsers as $groupUser) {
			if (isset($groupUser['User']['id']) && !in_array($groupUser['User']['id'], $expectedUserIds)) {
				$expectedUserIds[] = $groupUser['User']['id'];
			}
		}
		$actualUserData = $view->GroupUserList->convertGroupUserListForDisplay($groupUsers);
		$this->assertCount(
			count($expectedUserIds),
			$actualUserData,
			'データ数が違います'
		);

		$num = 0;
		$strId = '__ID__';
		$checkArray = array(
			'id' => $strId,
			'avatar' => '/users/users/download/' . $strId . '/avatar/thumb',
			'link' => '/users/users/view/' . $strId,
		);
		foreach ($actualUserData as $index => $userData) {
			$expectedUserId = $expectedUserIds[$num];
			$this->assertEquals(
				$index,
				$expectedUserId,
				'indexが違います'
			);
			foreach ($checkArray as $key => $expectedValue) {
				$this->assertEquals(
					str_replace($strId, $expectedUserId, $expectedValue),
					$userData[$key],
					$key . 'が違います'
				);
			}
			++$num;
		}
	}

}
