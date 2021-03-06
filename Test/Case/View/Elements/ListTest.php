<?php
/**
 * View/Elements/listのテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuna Miyashita <butackle@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('GroupsViewTestBase', 'Groups.Test/Case');

/**
 * View/Elements/listのテスト
 *
 * @author Yuna Miyashita <butackle@gmail.com>
 * @package NetCommons\Groups\Test\Case\View\Elements\List
 */
class GroupsViewElementsListTest extends GroupsViewTestBase {

/**
 * View/Elements/listのテスト
 *
 * @return void
 */
	public function testList() {
		$this->_makeElementView(
			'Groups.list',
			[
				'groups' => [
					[
						'Group' => ['id' => 1, 'name' => 'test'],
						'GroupsUser' => [
							['user_id' => 1],
							['user_id' => 2],
							['user_id' => 3],
							['user_id' => 4],
							['user_id' => 5],
							['user_id' => 6],
							['user_id' => 7],
							['user_id' => 8],
							['user_id' => 9],
							['user_id' => 10],
						]
					]
				],
				'users' => [
					['User' => ['id' => 1]],
					['User' => ['id' => 2]],
					['User' => ['id' => 3]],
					['User' => ['id' => 4]],
					['User' => ['id' => 6]],
					['User' => ['id' => 7]],
					['User' => ['id' => 8]],
					['User' => ['id' => 9]],
					['User' => ['id' => 10]],
					['User' => ['id' => 11]],
					['User' => ['id' => 12]],
				],
				'groupUsersList' => []
			]
		);
	}

}
