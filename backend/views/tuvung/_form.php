<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tuvung */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuvung-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'file')->fileInput()->label('Ảnh') ?>

    <?= $form->field($model, 'ten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phienam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nghia')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'fileAudio')->fileInput()->label('Audio') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<style>
    #tuvung-ten,#tuvung-phienam,#tuvung-nghia,.btn.btn-success{
        font-size: 16px;
    }
</style>