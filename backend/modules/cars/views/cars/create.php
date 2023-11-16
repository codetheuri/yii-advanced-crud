<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\modules\cars\models\Cars $model */

$this->title = 'Register Cars';
$this->params['breadcrumbs'][] = ['label' => 'Cars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cars-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
