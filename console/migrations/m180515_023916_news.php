<?php

use yii\db\Migration;

/**
 * Class m180515_023916_news
 */
class m180515_023916_news extends Migration
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


            $this->createTable('{{%news}}', [
            'news_id' => $this->primaryKey(),
            'news_title'=> $this->string(200)->notNull(),
            'news_slug'=>$this->string(200)->unique(),
            'news_content'=>$this->string(),
            'news_image'=>$this->string(500),
            'news_keywords' => $this->string(200),
            'news_description' => $this->string(250),
            'public_date_time'=> $this->datetime(),
            'news_status'=> $this->smallInteger(4)->notNull(),
            'cate_title' => $this->string(200)->notNull(),
            'cate_slug' => $this->string(),
            'news_viewed' => $this->interger(11),
            'news_tags_title' => $this->string(255),
            'add_user_id' => $this->interger(11),
            'add_user_name' => $this->string(30),
            'news_author' => $this->string(4)->notNull(),
            'created_at' => $this->interger()->notNull(),
            'updated_at' => $this->interger()->notNull(),
            
        ], $tableOptions);    
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
   }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180515_023916_news cannot be reverted.\n";

        return false;
    }
    */
}
