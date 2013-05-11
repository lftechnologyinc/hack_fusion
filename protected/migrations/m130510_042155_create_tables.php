<?php

class m130510_042155_create_tables extends CDbMigration
{

	public function up()
	{
		$this->createTable('room', array(
			'id' => 'int(11) NOT NULL AUTO_INCREMENT',
			'name' => 'varchar(255) DEFAULT NULL',
			'PRIMARY KEY (`id`)'
				), 'ENGINE InnoDB');

		$this->createTable('section', array(
			'id' => 'int(11) NOT NULL AUTO_INCREMENT',
			'size' => 'int(3) DEFAULT NULL',
			'room_id'=>'int(11) NOT NULL',
			'PRIMARY KEY (`id`)'
				), 'ENGINE InnoDB');

		$this->createTable('person', array(
			'id' => 'int(11) NOT NULL AUTO_INCREMENT',
			'name' => 'varchar(255) DEFAULT NULL',
			'manual_assign' => 'tinyint(1) DEFAULT 0',
			'section_id'=>'int(11) NOT NULL',
			'PRIMARY KEY (`id`)'
				), 'ENGINE InnoDB');

		$this->createTable('project', array(
			'id' => 'int(11) NOT NULL AUTO_INCREMENT',
			'name' => 'varchar(255) DEFAULT NULL',
			'PRIMARY KEY (`id`)'
				), 'ENGINE InnoDB');

		$this->createTable('project_person', array(
			'id' => 'int(11) NOT NULL AUTO_INCREMENT',
			'person_id'=>'int(11) NOT NULL',
			'project_id'=>'int(11) NOT NULL',
			'PRIMARY KEY (`id`)'
				), 'ENGINE InnoDB');

		$this->addForeignKey('fk_section1', 'section', 'room_id', 'room', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_section2', 'person', 'section_id', 'section', 'id');

		$this->addForeignKey('fk_section3', 'project_person', 'person_id', 'person', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_section4', 'project_person', 'project_id', 'project', 'id', 'CASCADE', 'CASCADE');

	}

	public function down()
	{
		echo "m130510_042155_create_tables does not support migration down.\n";
		return false;
	}

}