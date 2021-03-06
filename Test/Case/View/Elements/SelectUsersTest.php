<?php
/**
 * View/Elements/select_usersのテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuna Miyashita <butackle@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('GroupsViewTestBase', 'Groups.Test/Case');

/**
 * View/Elements/select_usersのテスト
 *
 * @author Yuna Miyashita <butackle@gmail.com>
 * @package NetCommons\Groups\Test\Case\View\Elements\SelectUsers
 */
class GroupsViewElementsSelectUsersTest extends GroupsViewTestBase {

/**
 * View/Elements/select_usersのテスト
 *
 * @return void
 */
	public function testSelectUsers() {
		$this->_makeElementView(
			'Groups.select_users',
			array (
				'roomId' => 1
			)
		);
	}

}
