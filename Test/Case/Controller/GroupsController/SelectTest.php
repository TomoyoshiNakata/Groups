<?php
/**
 * GroupsController::select()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuna Miyashita <butackle@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('GroupsTestBase', 'Groups.Test/Case');

/**
 * GroupsController::select()のテスト
 *
 * @author Yuna Miyashita <butackle@gmail.com>
 * @package NetCommons\Groups\Test\Case\Controller\GroupsController
 */
class GroupsControllerSelectTest extends GroupsTestBase {

/**
 * select()アクションのGetリクエストテスト
 *
 * @dataProvider dataProviderSelectGet
 * @param $existGroupTableData データ有無
 * @return void
 */
	public function testSelectGet($existGroupTableData = 1) {
		//データが無いテストケースの場合はデータを全削除
		if (!$existGroupTableData) {
			$this->_group->deleteAll(true);
		}
		//テスト実行
		$this->_testGetAction(
			array('action' => 'select'),
			array('method' => 'assertNotEmpty'),
			null,
			'view'
		);
	}

/**
 * testSelectGet用dataProvider
 * 
 * ### 戻り値
 *  - existGroupTableData:	データ有無
 */
	public function dataProviderSelectGet() {
		return array(
			[true], [false]
		);
	}

}
