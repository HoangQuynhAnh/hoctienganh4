<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bài kiểm tra online';
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
                        <?= Html::a('Thêm', 'index.php?r=baionline%2Fcreate', ['class' => 'btn btn-success left']) ?>
                    </p>
                    <table class="table table-header-bg">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'ten',
               [
                'attribute'=>'loai',
                'value'=>function($data)
                {
                if($data->loai=='1')
                {
                return 'Kiểm tra hàng tuần';
                 }
                 else{
                return 'Kiểm tra cuối kỳ';
                        }
                    }
            ],
            [
                                'attribute'=>'Tạo câu hỏi',
                                'format' => 'raw',
                                'value'=> function($data){
                                   return
                                    '<button class=" btn btn-warning"><a href="index.php?r=cauhoionline&baikiemtra='.$data->id.'" style="color:white">Tạo câu hỏi</a></button>

                                    ';
                                }  
                                
                            ],

             ['class' => ActionColumn::className(),'template'=>' {update} {delete}' ],
                            
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
</style>
