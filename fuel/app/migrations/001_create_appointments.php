<?php

namespace Fuel\Migrations;

class Create_appointments
{
	public function up()
	{
		\DBUtil::create_table('appointments', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'user_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'visit_at' => array('type' => 'date'),
			'channel_01' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'agent_01' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'client_01' => array('constraint' => 255, 'type' => 'varchar'),
			'brand_01' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'product_01' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'memo_01' => array('type' => 'text', 'null' => true),
			'channel_02' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'agent_02' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'client_02' => array('constraint' => 255, 'type' => 'varchar'),
			'brand_02' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'product_02' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'memo_02' => array('type' => 'text', 'null' => true),
			'channel_03' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'agent_03' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'client_03' => array('constraint' => 255, 'type' => 'varchar'),
			'brand_03' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'product_03' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'memo_03' => array('type' => 'text', 'null' => true),
			'channel_04' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'agent_04' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'client_04' => array('constraint' => 255, 'type' => 'varchar'),
			'brand_04' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'product_04' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'memo_04' => array('type' => 'text', 'null' => true),
			'channel_05' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'agent_05' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'client_05' => array('constraint' => 255, 'type' => 'varchar'),
			'brand_05' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'product_05' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'memo_05' => array('type' => 'text', 'null' => true),
			'created_at' => array('type' => 'date', 'null' => true),
			'updated_at' => array('type' => 'date', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('appointments');
	}
}