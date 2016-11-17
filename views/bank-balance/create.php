<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BankBalance */

$this->title = 'Create Bank Balance';
$this->params['breadcrumbs'][] = ['label' => 'Bank Balances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bank-balance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
