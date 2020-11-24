<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Store;

/* @var $this yii\web\View */
/* @var $model app\models\Device */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="device-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'serial_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Store::find()->asArray()->all(), 'id', 'name'),
        'value' => $model->store,
        'theme' => 'bootstrap',
        'options' => ['placeholder' => 'Выберите склад'],
        'pluginOptions' => ['allowClear' => true],
    ])->label('Склад'); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
