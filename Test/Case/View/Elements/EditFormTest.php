<?php
/**
 * View/Elements/edit_formのテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuna Miyashita <butackle@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('GroupsViewTestBase', 'Groups.Test/Case');

/**
 * View/Elements/edit_formのテスト
 *
 * @author Yuna Miyashita <butackle@gmail.com>
 * @package NetCommons\Groups\Test\Case\View\Elements\EditForm
 */
class GroupsViewElementsEditFormTest extends GroupsViewTestBase {

/**
 * View/Elements/edit_formのテスト
 *
 * @dataProvider dataProviderEditForm
 * @param int $data
 * @return void
 */
	public function testEditForm($data) {
		$this->_makeElementView(
			'Groups.edit_form',
			$data
		);
	}

/**
 * testEditForm用dataProvider
 * 
 * ### 戻り値
 *  - data:	Elementの変数
 */
	public function dataProviderEditForm() {
		return array(
			array(
				[
					'isModal' => 0,
					'groups' => [
						[
							'Group' => ['id' => 1, 'name' => 'test'],
							'GroupsUser' => [['user_id' => 1], ['user_id' => 2]]
						]
					],
					'users' => [
						['User' => ['id' => 1]],
						['User' => ['id' => 2]],
					]
				],
			),
			array(
				[
					'isModal' => 1,
					'groups' => [
						[
							'Group' => ['id' => 1, 'name' => 'test'],
							'GroupsUser' => [['user_id' => 1], ['user_id' => 2]]
						]
					],
					'users' => [
						['User' => ['id' => 1]],
						['User' => ['id' => 2]],
					]
				],
			),
		);
	}

}
