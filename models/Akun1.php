<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "akun1".
 *
 * @property int $kd_akun1
 * @property string|null $akun1
 */
class Akun1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akun1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['akun1'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_akun1' => 'Kd Akun1',
            'akun1' => 'Akun1',
        ];
    }
}
