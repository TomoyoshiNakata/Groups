<?php
/**
 * GroupsControllerのテストケース
 *
 * @author Yuna Miyashita <butackle@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsControllerTestCase', 'NetCommons.TestSuite');

/**
 * GroupsControllerのテストケース
 *
 * @author Yuna Miyashita <butackle@gmail.com>
 * @package NetCommons\Groups\Test\Case\Controller
 */
class GroupsControllerTestCase extends NetCommonsControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.groups.group',
		'plugin.groups.groups_user',
		'plugin.groups.page4_groups_test',
		'plugin.private_space.roles_rooms_user4test',
		'plugin.private_space.room4test',
		'plugin.user_attributes.user_attribute_layout',
	);

/**
 * Plugin name
 *
 * @var string
 */
	public $plugin = 'groups';

/**
 * Controller name
 *
 * @var string
 */
	protected $_controller = 'groups';

/**
 * グループModel
 * 
 * @var object
 */
	protected $__group;

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		//ログイン
		TestAuthGeneral::login($this);
		CakeSession::write('Auth.User.UserRoleSetting.use_private_room', true);

		$this->__group = $this->controller->Group;
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		//ログアウト
		TestAuthGeneral::logout($this);

		parent::tearDown();
	}

/**
 * 登録データ内容の確認
 *
 * @param $dbData	DBから取得したデータ
 * @param $inputData	入力したデータ
 * @param $expectedSaveResult	セーブ結果(想定)
 * @return void
 */
	protected function _assertGroupData($dbData, $inputData, $expectedSaveResult) {
		$inputGroupUserData = isset($inputData['GroupsUser']) ? $inputData['GroupsUser'] : null;
		//登録データ詳細を取得
		$saveGroupsData = $dbData[0]['Group'];
		$saveGroupsUserData = $dbData[0]['GroupsUser'];
		//登録したユーザ数を確認
		$expectedGroupUserCnt = $expectedSaveResult ? count($inputGroupUserData) : 0;
		$this->assertCount($expectedGroupUserCnt, $saveGroupsUserData);
		//グループ名が正しく登録されているかを確認
		$expectedUserName = $inputData['name'];
		$this->assertEquals($expectedUserName, $saveGroupsData['name']);
		//グループユーザが正しく登録されているかを確認
		$saveGroupId = $saveGroupsData['id'];
		foreach ($saveGroupsUserData as $index => $actualUserData) {
			$expectedUserId = $inputGroupUserData[$index]['user_id'];
			$actualUserId = $actualUserData['user_id'];
			$actualGroupId = $actualUserData['group_id'];
			$this->assertEquals($saveGroupId, $actualGroupId);
			$this->assertEquals($expectedUserId, $actualUserId);
		}
	}

/**
 * exceptionのエラーを返す
 * 
 * @param $exception
 */
	protected function _assertException($exception = null) {
			if (is_null($exception)) {
				return;
			}

			$errMessage = "Error:" . $exception->getCode() . "　" . $exception->getMessage() . "\r\n";
			$errMessage .= $exception->getFile() . "  Line:" . $exception->getLine() . "\r\n";
			//$errMessage .= "\r\n".$exception->getTraceAsString()."\r\n";

			$this->assertFalse(true, $errMessage);
	}
}
