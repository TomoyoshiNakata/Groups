<?php
/**
 * GroupsUser::validate()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuna Miyashita <butackle@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('GroupsModelTestBase', 'Groups.Test/Case');

/**
 * GroupsUser::validate()のテスト
 *
 * @author Yuna Miyashita <butackle@gmail.com>
 * @package NetCommons\Groups\Test\Case\Model\GroupsUser
 */
class GroupsUserValidateTest extends GroupsModelTestBase {

/**
 * validates()のテスト
 *
 * @dataProvider dataProviderValidates
 * @param array $inputData 入力データ
 * @param array $validationErrors バリデーション結果
 * @return void
 */
	public function testValidates($inputData = [], $validationErrors = []) {
		$this->_templateTestBeforeValidation(
			$inputData,
			$validationErrors,
			$this->_classGroupsUser
		);
	}
}
