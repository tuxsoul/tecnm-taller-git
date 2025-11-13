<?php

use yii\db\Migration;

class m251112_182308_tbl_persona_edad_15 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->alterColumn('tbl_persona', 'edad', $this->integer()->defaultValue(15)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m251112_182308_tbl_persona_edad_15 cannot be reverted.\n";
        return false;
    }
}
