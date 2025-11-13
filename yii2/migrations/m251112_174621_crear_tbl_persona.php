<?php

use yii\db\Migration;

class m251112_174621_crear_tbl_persona extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('tbl_persona', [
		'id' => $this->integer(),
		'nombre' => $this->string(150)->notNull(),
		'edad' => $this->integer()->notNull(),
	]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
	$this->dropTable('tbl_persona');
    }
}
