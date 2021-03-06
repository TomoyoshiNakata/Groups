<?php
/**
 * GroupsUser4UsersTestFixture
 *
 * @author Yuna Miyashita <butackle@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

/**
 * Summary for GroupsUser4UsersTestFixture
 */
class GroupsUser4UsersTestFixture extends GroupsUserFixture {

/**
 * Model name
 *
 * @var string
 */
	public $name = 'GroupsUser';

/**
 * Full Table Name
 *
 * @var string
 */
	public $table = 'groups_users';

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'group_id' => '1',
			'user_id' => '1',
			'created_user' => '1',
			'created' => '2016-02-28 04:58:01',
			'modified_user' => '1',
			'modified' => '2016-02-28 04:58:01'
		),
		array(
			'id' => '2',
			'group_id' => '1',
			'user_id' => '3',
			'created_user' => '1',
			'created' => '2016-03-15 14:12:00',
			'modified_user' => '1',
			'modified' => '2016-03-15 14:12:00'
		),
		array(
			'id' => '3',
			'group_id' => '2',
			'user_id' => '1',
			'created_user' => '1',
			'created' => '2016-03-15 14:12:00',
			'modified_user' => '1',
			'modified' => '2016-03-15 14:12:00'
		),
		array(
			'id' => '4',
			'group_id' => '2',
			'user_id' => '2',
			'created_user' => '1',
			'created' => '2016-03-15 14:12:00',
			'modified_user' => '1',
			'modified' => '2016-03-15 14:12:00'
		),
	);

}
