<?php
/**
 * Room4GroupsTestFixture
 *
 * @author Yuna Miyashita <butackle@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('RoomFixture', 'Rooms.Test/Fixture');

/**
 * Summary for Room4GroupsTestFixture
 */
class Room4GroupsTestFixture extends RoomFixture {

/**
 * Model name
 *
 * @var string
 */
	public $name = 'Room';

/**
 * Full Table Name
 *
 * @var string
 */
	public $table = 'rooms';

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'space_id' => '2',
			'page_id_top' => '1',
			'root_id' => null,
			'parent_id' => null,
			'lft' => '1',
			'rght' => '6',
			'active' => '1',
			'default_role_key' => 'visitor',
			'need_approval' => '1',
			'default_participation' => '1',
			'page_layout_permitted' => '1',
		),
		array(
			'id' => '4',
			'space_id' => '2',
			'page_id_top' => '3',
			'root_id' => '1',
			'parent_id' => '1',
			'lft' => '2',
			'rght' => '3',
			'active' => '1',
			'default_role_key' => 'visitor',
			'need_approval' => '1',
			'default_participation' => '1',
			'page_layout_permitted' => '1',
		),
		array(
			'id' => '7',
			'space_id' => '3',
			'page_id_top' => '7',
			'root_id' => '2',
			'parent_id' => '2',
			'lft' => '8',
			'rght' => '9',
			'active' => '1',
			'default_role_key' => 'room_administrator',
			'need_approval' => '0',
			'default_participation' => '0',
			'page_layout_permitted' => '0',
		),
		//コミュニティスペース
		array(
			'id' => '3',
			'space_id' => '4',
			'page_id_top' => null,
			'root_id' => null,
			'parent_id' => null,
			'lft' => '13',
			'rght' => '16',
			'active' => true,
			'default_role_key' => 'general_user',
			'need_approval' => true,
			'default_participation' => true,
			'page_layout_permitted' => true,
			'theme' => null,
		),
	);

}
