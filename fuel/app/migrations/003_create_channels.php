<?php

namespace Fuel\Migrations;

class Create_channels
{
	public function up()
	{
		\DBUtil::create_table('channels', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'sort' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'delete_flag' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'created_at' => array('type' => 'timestamp', 'null' => true),
			'updated_at' => array('type' => 'timestamp', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('channels');
	}
}