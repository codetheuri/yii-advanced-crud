<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\modules\cars\models\Cars $model */

$this->title = 'Update Car registration: ' . $model->car_reg;
$this->params['breadcrumbs'][] = ['label' => 'Cars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->car_reg, 'url' => ['view', 'car_reg' => $model->car_reg]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cars-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
