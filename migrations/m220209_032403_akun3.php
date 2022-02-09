<?php

use yii\db\Migration;

/**
 * Class m220209_032403_akun3
 */
class m220209_032403_akun3 extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('akun3', [
            'kd_akun1' => $this->primaryKey(),
            'kd_akun2' => $this->tinyInteger()->unique(),
            'kd_akun3' => $this->tinyInteger()->unique(),
            'akun3' => $this->string(32),
        ], $tableOptions);
    }

    public function down()
    {
        return False;
    }
}
