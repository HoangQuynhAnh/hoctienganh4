<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Cauhoionline */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cauhoionline-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ten')->textInput(['maxlength' => true]) ?>

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
</style>