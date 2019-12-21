<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Truyen */

$this->title = $model->ten;
$this->params['breadcrumbs'][] = ['label' => 'Truyens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="main-panel" style=" font-size: 16px;">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-12 grid-margin-lg-0 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                    <h4 class="card-title"><h1 style="font-size: 35px"><?= Html::encode($this->title) ?></h1></h4>
                    <div class="table-responsive mt-3">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary font']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'font btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ten',
            'anh',
            'tieude',
            ['attribute'=>'noidung',
            'format'=>'raw',]
        ],
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
    #videomorong-ten,.btn.btn-success{
        font-size: 16px;
    }
</style>
<style>
    .left{
        float:right;
        margin-bottom: 20px;
        font-size: 17px;

    }
    .table.table-striped.table-bordered tbody tr td{
        font-size: 16px;
    }
    .table.table-striped.table-bordered tr th{
        font-size: 18px;
        color:#007bff;
  }
  .font{
    font-size: 16px;
  }
  p{
    font-size: 12px;
  }
  .img{
    border-radius:0%;
  }
</style>