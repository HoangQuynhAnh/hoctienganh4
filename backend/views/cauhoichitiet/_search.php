<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TimCauhoichitiet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cauhoichitiet-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'idcauhoi') ?>

    <?= $form->field($model, 'noidung') ?>

    <?= $form->field($model, 'da_dung') ?>

    <?= $form->field($model, 'da_nhieu1') ?>

    <?php // echo $form->field($model, 'da_nhieu2') ?>

    <?php // echo $form->field($model, 'da_nhieu3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
