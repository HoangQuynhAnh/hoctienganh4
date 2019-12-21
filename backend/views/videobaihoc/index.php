<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TimVideobaihoc */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Video bài học: '.$tenbaihoc;
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
         <?= Html::a('Thêm', 'index.php?r=videobaihoc%2Fcreate&baihoc='.$baihoc.'', ['class' => 'btn btn-success left']) ?>
    </p>
    <p></p>
                      <table class="table table-header-bg">
 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'ten',
            [
                                'attribute'=>'Link',
                                'label'=>'Video',
                                'format' => 'raw',
                                'value'=> function($data){
                                    if(isset($data->link)){
                                         $video= '<video width="360" height="240" controls style="margin-left: 120px;margin-bottom:40px">
                                        <source src="../../uploads/video/'.$data->link.'" type="video/mp4">
                                             </video>';
                                    return $video;
                                    }
                                    else{

                                    return 'Chưa có video';
                                    }
                                }  
                                
                            ],
            //'type',

            ['class' => ActionColumn::className(),'template'=>'  {delete}' ],
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

  

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   


</div>
