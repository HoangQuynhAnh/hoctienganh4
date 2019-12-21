<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V19</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
        <form class="login100-form validate-form">
          <span class="login100-form-title p-b-33">
            Login
          </span>

         
            <?= $form->field($model, 'username')->textInput(['maxlength' => 15, 'class' => 'input100','placeholder'=>"Tài khoản"])->label(false) ?>
 
        
               <?= $form->field($model, 'password')->passwordInput(['maxlength' => 15, 'class' => 'input100','placeholder'=>"Password"])->label(false) ?>
    
           <div class="text-left" >
            <span class="txt1"style="font-size: 20px">
                 <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </span>  
          </div>
          <div class="container-login100-form-btn m-t-20">
             <?= Html::submitButton('Đăng nhập', ['class' => 'login100-form-btn', 'name' => 'login-button']) ?>
          </div>

         
        </form>
      </div>
    </div>
  </div>

     <?php ActiveForm::end(); ?>
     <style>
         .form-group label{
        font-size: 16px
         }
         .help-block.help-block-error{
              font-size: 16px
         }
     </style>

    

            
       
   