<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\modules\cars\models\Cars $model */

$this->title = $model->car_reg . ' - ' . $model->car_model." " .$model->car_name;
$this->params['breadcrumbs'][] = ['label' => 'Cars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cars-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'car_reg' => $model->car_reg], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'car_reg' => $model->car_reg], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'car_reg',
            'car_name',
            'car_type',
            'car_model',
            'car_price',
            'status',
            'registered_at',
        ],
    ]) ?>

</div>
