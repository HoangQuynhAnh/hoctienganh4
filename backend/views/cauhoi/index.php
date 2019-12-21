<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\TimCauhoi */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Câu hỏi: '.$tenbaihoc;
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
                        <?= Html::a('Thêm', 'index.php?r=cauhoi%2Fcreate&baikiemtra='.$_GET['baikiemtra'].'', ['class' => 'btn btn-success left']) ?>
                    </p>
                    <table class="table table-header-bg">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'ten',
           [
                                'attribute'=>'Tạo câu hỏi trắc nghiệm',
                                'format' => 'raw',
                                'value'=> function($data){
                                   return'

                                    <button class=" btn btn-primary"><a href="index.php?r=cauhoichitiet&idcauhoi='.$data->id.'" style="color:white">Tạo câu hỏi</a></button>
                                   


                                    ';
                                }  
                                
                            ],
                        [
                                'format' => 'raw',
                                'value'=> function($data){
                                    return'
                                <a href="index.php?r=cauhoi%2Fupdate&id='.$data->id.'&baikiemtra='.$_GET['baikiemtra'].'" title="Update" aria-label="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a>';
                                }
                            ],
                            ['class' => ActionColumn::className(),'template'=>'  {delete}']
            // ['class' => ActionColumn::className(),'template'=>' {update} {delete}']
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
