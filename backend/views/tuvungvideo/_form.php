<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tuvungvideo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuvungvideo-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'ten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loaitu')->dropDownList(
        [
            '1'=>'Danh từ',
            '2'=>'Động từ',
            '3'=>'Trạng từ',
            '4'=>'Tính từ',
            '5'=>'Giới từ',
        ],
    )?>

    <?= $form->field($model, 'phienam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nghia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput()->label('Audio') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
