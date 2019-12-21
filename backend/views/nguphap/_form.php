<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Nguphap */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nguphap-form">
	 <?php $form = ActiveForm::begin(); ?>

  	<?= $form->field($model, 'mota')->textInput()?>
  
    <?= $form->field($model, 'noidung')->textarea(['id'=>'content'])?>
  
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<style>
	#nguphap-mota,.btn.btn-success{
		font-size: 16px

	}
</style>
