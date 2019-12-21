<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchTuvungvideo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuvungvideo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ten') ?>

    <?= $form->field($model, 'loaitu') ?>

    <?= $form->field($model, 'phienam') ?>

    <?= $form->field($model, 'nghia') ?>

    <?php // echo $form->field($model, 'audio') ?>

    <?php // echo $form->field($model, 'idvideo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
