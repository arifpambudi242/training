<?php

use yii\db\Migration;

/**
 * Class m220209_032356_akun2
 */
class m220209_032356_akun2 extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('akun2', [
            'kd_akun1' => $this->primaryKey(),
            'kd_akun2' => $this->tinyInteger()->unique(),
            'akun2' => $this->string(32),
        ], $tableOptions);
    }

    public function down()
    {
        return False;
    }
}
