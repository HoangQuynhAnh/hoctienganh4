<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchTuvung */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Từ vựng bài học: '.$tenbaihoc;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-panel" style=" font-size: 16px;">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-xl-12 grid-margin-lg-0 grid-margin stretch-card">
          <div class="card">

            <div class="card-body">
                <h4 class="card-title"><h1 style="font-size: 35px"><?= Html::encode($this->title) ?></h1></h4>
                <div class="table-responsive mt-3">
                        <p> 
                        <?= Html::a('Thêm', 'index.php?r=tuvung%2Fcreate&baihoc='.$baihoc.'', ['class' => 'btn btn-success left']) ?>
                    </p>
                    <table class="table table-header-bg">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'idbaihoc',
            'ten',
             [
            'attribute'=>'anh',
            'format' => 'html',
            'value'=>function($data)
                {
                return Html::img("../../uploads/tuvung/".$data->anh."", ['style'=>'width:150px;height:150px;border-radius: 0%']);
                },
            ],
          
            'phienam',
            'nghia',
            [
            'attribute'=>'Audio',
            'format' => 'raw',
            'value'=> function($data){
                if(isset($data->audio)){
                     $audio= '<audio controls style="margin-left: 20px;margin-bottom:40px; with: -40px">
                         <source src="../../uploads/audio/'.$data->audio.'">
                        </audio>';
                    return $audio;
                 
                 }else{
                     return "Chưa có";
                     }
           
             }                      
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</table>
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
    .table.table-striped.table-bordered tbody tr td{
        font-size: 16px;
    }
    .table.table-striped.table-bordered tr th{
        font-size: 18px;
        color:#007bff;
  }
  .thing{
    width: 200px
  }
  .table td img{
    border-radius:0%;
  }
</style>
