<?php

namespace Fuel\Migrations;

class Create_subjects
{
	public function up()
	{
		\DBUtil::create_table('subjects', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 50, 'type' => 'varchar'),
			'introduce' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('subjects');
	}
}