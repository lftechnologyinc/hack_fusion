<?php

class m130510_042155_create_tables extends CDbMigration
{

	public function up()
	{
		$this->createTable('table_name', array(
			'id' => 'int(11) NOT NULL AUTO_INCREMENT',
			'name' => 'varchar(255) DEFAULT NULL',
			'type' => "enum('general','bug','feature') DEFAULT NULL",
			'created_at' => 'datetime DEFAULT NULL',
			'updated_at' => 'varchar(45) DEFAULT NULL',
			'PRIMARY KEY (`id`)'
				), 'ENGINE InnoDB');
	}

	public function down()
	{
		echo "m130510_042155_create_tables does not support migration down.\n";
		return false;
	}

}