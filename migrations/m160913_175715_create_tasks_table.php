<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation for table `tasks`.
 */
class m160913_175715_create_tasks_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
    	$tableOptions = null;
    	if ($this->db->driverName === 'mysql') {
    		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
    	}
    	$this->createTable('tasks', [
            'id' => $this->primaryKey(),
    		'title'  => Schema::TYPE_STRING.' NOT NULL DEFAULT ""',
    		'message' => Schema::TYPE_TEXT.' NOT NULL DEFAULT ""'
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tasks');
    }
}
