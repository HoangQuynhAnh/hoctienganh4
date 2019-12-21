<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Cauhoichitiet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cauhoichitiet-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'noidung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'da_dung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'da_nhieu1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'da_nhieu2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'da_nhieu3')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<style>
    #cauhoichitiet-noidung,
    #cauhoichitiet-da_dung,
    #cauhoichitiet-da_nhieu1,
    #cauhoichitiet-da_nhieu2,
    #cauhoichitiet-da_nhieu3,.btn.btn-success{
        font-size: 16px;
    }
</style>
