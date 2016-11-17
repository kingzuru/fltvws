<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VehicleModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vehicle_make_id')->textInput() ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
