<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Videobaihoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="videobaihoc-form">

   
    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>


    <?= $form->field($model, 'ten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput()->label('Video') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<style>
	#videobaihoc-ten,#videobaihoc-file,.btn.btn-success{
		font-size: 16px;
	}
</style>
