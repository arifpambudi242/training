<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Akun1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akun1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'akun1')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
