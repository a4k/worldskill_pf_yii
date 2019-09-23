<?php

use yii\db\Migration;

/**
 * Class m190923_115718_create_post
 */
class m190923_115718_create_post extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190923_115718_create_post cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('reservations2', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'schedule_id' => $this->integer(),
            'fio' => $this->string(),
            'place' => $this->integer(),
            'type_class' => $this->timestamp(),
            'create_at' => $this->timestamp(),
        ]);

    }

    public function down()
    {
        $this->delete('reservations2');
        echo "m190923_115718_create_post cannot be reverted.\n";

        return false;
    }
}
