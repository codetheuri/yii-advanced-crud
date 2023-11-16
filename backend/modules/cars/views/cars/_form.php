<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;

/** @var yii\web\View $this */
/** @var backend\modules\cars\models\Cars $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cars-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'car_reg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_type')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'file')->fileInput() ?>
    <?= $form->field($model, 'car_model')->dropDownList(['Toyota' => 'Toyota', 'Nissan' => 'Nissan', 'Mazda' => 'Mazda', 'Isuzu' => 'Isuzu', 'Audi' => 'Audi', 'Benz' => 'Benz', 'Vw' => 'Vw', 'Porche' => 'Porche', 'Bmw' => 'Bmw', 'Tesla' => 'Tesla',], ['prompt' => '']) ?>

    <?= $form->field($model, 'car_price')->textInput() ?>

    <?= $form->field($model, 'registered_at')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Enter registration date ...'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>