<?php

use yii\db\Migration;

class m251112_175817_tbl_persona_drop_edad extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->dropColumn('tbl_persona', 'edad');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
	$this->addColumn('tbl_persona', 'edad', $this->integer()->notNull());
    }
}
