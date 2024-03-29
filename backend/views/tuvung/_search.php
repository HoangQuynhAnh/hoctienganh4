<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchTuvung */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuvung-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'idbaihoc') ?>

    <?= $form->field($model, 'ten') ?>

    <?= $form->field($model, 'audio') ?>

    <?= $form->field($model, 'phienam') ?>

    <?php // echo $form->field($model, 'nghia') ?>

    <?php // echo $form->field($model, 'anh') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
