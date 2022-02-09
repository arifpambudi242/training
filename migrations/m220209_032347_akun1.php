<?php

use yii\db\Migration;

/*
================
id	integer
nip	varchar
nama	varchar
jekel	varchar
tempat_lahir varchar
tgl_lahir	date
telpon	varchar
agama	varchar
alamat	varchar
golongan varchar
 */

class m220209_032347_akun1 extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('akun1', [
            'kd_akun1' => $this->primaryKey(),
            'akun1' => $this->string(32),
        ], $tableOptions);
    }

    public function down()
    {
        return False;
    }
}
