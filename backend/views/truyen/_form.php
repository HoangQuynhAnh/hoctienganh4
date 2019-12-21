<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Truyen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="truyen-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'ten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'tieude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noidung')->textarea(['id'=>'content']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<style>
	<style>

    .control-label{
        font-size: 16px;
        color: orange;
        margin: 10px
    }
    #truyen-ten,#truyen-tieude,.btn.btn-success{
        font-size: 16px;
    }
    .form-group label {
     font-size: 16px;
        color: orange;
        margin: 10px
}
</style>
</style>
