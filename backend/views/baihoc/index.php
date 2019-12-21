<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TimBaihoc */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Bài học';
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

                    <p>
                        <?= Html::a('Thêm', ['create'], ['class' => 'btn btn-success left']) ?>
                    </p>
                    <p></p>
                    <table class="table table-header-bg">

                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            //'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

            //'id',
                                [
                                    'attribute'=>'type',
                                    'value'=>function($data)
                                    {
                                        if($data->type=='1')
                                        {
                                            return 'Friends';
                                        }
                                        elseif ($data->type=='2') {
                                            return 'School';
                                        }
                                        elseif ($data->type=='3') {
                                            return 'Family';
                                        }
                                        else {
                                            return 'Around the world';
                                        }
                                       
                                        
                                    }

                                ],
                                'name',
                                'tentuvung',
                                [
                                'attribute'=>'Phần liên quan',
                                'format' => 'raw',
                                'value'=> function($data){
                                    // if($data->type='5'){
                                    //     return "abc";
                                    // }
                                    // else{

                                    // }

                                   return
                                    '<button class=" btn btn-warning"><a href="index.php?r=tuvung&baihoc='.$data->id.'" style="color:white">Từ vựng</a></button>


                                    <button class=" btn btn-primary"><a href="index.php?r=nguphap&baihoc='.$data->id.'" style="color:white">Ngữ pháp</a></button>
                                   
                                    <button class=" btn btn-info"><a href="index.php?r=baikiemtra&baihoc='.$data->id.'" style="color:white">Bài tập</a></button>

                                    <button class=" btn btn-success"><a href="index.php?r=videobaihoc&baihoc='.$data->id.'" style="color:white">Video</a></button>


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