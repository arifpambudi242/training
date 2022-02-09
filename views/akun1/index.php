<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Akun1;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Akun1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Akun1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun1-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Akun1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_akun1',
            'akun1',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Akun1 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_akun1' => $model->kd_akun1]);
                }
            ],
        ],
    ]); ?>


</div>