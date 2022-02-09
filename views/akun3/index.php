<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Akun3;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Akun3Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Akun3s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun3-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Akun3', ['create'], ['class' => 'btn btn-success']) ?>
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
            'kd_akun3',
            'akun3',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Akun3 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_akun1' => $model->kd_akun1]);
                }
            ],
        ],
    ]); ?>


</div>