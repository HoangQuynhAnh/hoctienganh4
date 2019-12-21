<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Baihoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="baihoc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->dropDownList(
        [
            '1'=>'Friends',
            '2'=>'School',
            '3'=>'Family',
            '4'=>'Around the world',
           



        ],
    )?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'tentuvung')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Lưu', ['class' => 'btn btn-success font15']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<style>
	.font15,#baihoc-type,#baihoc-name{
		font-size: 16px;
		float: right;
		margin-bottom: 10px
	}
    #baihoc-tentuvung{
        font-size: 16px;
    }
</style>
