<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Akun2;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Akun2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Akun2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun2-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Akun2', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_akun1',
            'kd_akun2',
            'akun2',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Akun2 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_akun1' => $model->kd_akun1]);
                }
            ],
        ],
    ]); ?>


</div>