<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PurchaseOrderItemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="purchase-order-item-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'purchase_order_item_id') ?>

    <?= $form->field($model, 'purchase_order_item') ?>

    <?= $form->field($model, 'instock_count') ?>

    <?= $form->field($model, 'reorder_level') ?>

    <?= $form->field($model, 'unit_of_measure_id') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'record_status') ?>

    <?php // echo $form->field($model, 'create_user_id') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <?php // echo $form->field($model, 'update_user_id') ?>

    <?php // echo $form->field($model, 'update_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
