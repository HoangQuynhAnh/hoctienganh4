<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\cauhoichitietonlineonline */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cauhoichitietonlineonline-form">

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
    label,#cauhoionline-ten,.btn.btn-success{
        font-size:16px;
        height: 30px;
    
    }
       #cauhoichitietonline-noidung,
    #cauhoichitietonline-da_dung,
    #cauhoichitietonline-da_nhieu1,
    #cauhoichitietonline-da_nhieu2,
    #cauhoichitietonline-da_nhieu3,.btn.btn-success{
        font-size: 16px;
    }
</style>