<?php

use backend\modules\cars\models\Cars;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


/** @var yii\web\View $this */
/** @var backend\modules\cars\models\CarsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Registered Cars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cars-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Register Cars', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'car_reg',
            'car_name',
            'car_type',
            'car_model',
            'car_price',
            //'status',
            //'registered_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Cars $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'car_reg' => $model->car_reg]);
                 }
            ],
        ],
    ]); ?>


</div>
