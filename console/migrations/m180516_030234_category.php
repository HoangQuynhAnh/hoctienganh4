<?php

use yii\db\Migration;

/**
 * Class m180516_030234_category
 */
class m180516_030234_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
      


    }
    $this->createTable('{{%category}}', [
            'cate_id' => $this->primaryKey(),
            'cate_title'=> $this->string(200)->notNull(),
            'cate_slug'=>$this->string(200)->unique(),
            'cate_des' => $this->interger(),
            'add_user_id' => $this->interger(11)->notNull(),
            'add_user_name' => $this->string(30)->notNull(),
        ], $tableOptions); 

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
               $this->dropTable('{{%category}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180516_030234_category cannot be reverted.\n";

        return false;
    }
    */
}
