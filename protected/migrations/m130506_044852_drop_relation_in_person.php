<?php

class m130506_044852_drop_relation_in_person extends CDbMigration
{
	public function up()
	{
        $this->dropForeignKey('fk_section2', 'person');
	}

	public function down()
	{
		echo "m130506_044852_drop_relation_in_person does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}