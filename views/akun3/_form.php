<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Akun3 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akun3-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_akun2')->textInput() ?>

    <?= $form->field($model, 'kd_akun3')->textInput() ?>

    <?= $form->field($model, 'akun3')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
