<?php
/**
 * View/Group/select_jsonのテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuna Miyashita <butackle@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('GroupsViewTestBase', 'Groups.Test/Case');

/**
 * View/Group/select_jsonのテスト
 *
 * @author Yuna Miyashita <butackle@gmail.com>
 * @package NetCommons\Groups\Test\Case\View\Group\selectJson
 */
class GroupsViewGroupselectJsonTest extends GroupsViewTestBase {

/**
 * View/Group/select_jsonのテスト
 *
 * @return void
 */
	public function testselectJson() {
		$this->controller->set('users', [
			['User' => ['id' => 1]],
			['User' => ['id' => 2]]
		]);
		$view = $this->_createViewClass();
		$view->render('Groups.Groups/json/select');
	}

}
