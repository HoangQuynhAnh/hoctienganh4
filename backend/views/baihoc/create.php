<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Baihoc */

$this->title = 'Thêm bài học';
$this->params['breadcrumbs'][] = ['label' => 'Baihocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
 <div class="main-panel" style=" font-size: 16px;">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-12 grid-margin-lg-0 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                    <h4 class="card-title"><h1 style="font-size: 35px"><?= Html::encode($this->title) ?></h1></h4>
                    <div class="table-responsive mt-3">

 <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
      
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
<style>
    .left{
        float:right;
        margin-bottom: 20px;
        font-size: 17px;

    }

   
    .form-group label{
        font-size: 16px;
        color: orange;
        margin: 10px
    }
</style>