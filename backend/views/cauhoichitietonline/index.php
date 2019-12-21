<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
  $idcauhoi=$_GET['idcauhoi'];
$this->title = 'Câu hỏi chi tiêt';
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
                        <?= Html::a('Thêm', 'index.php?r=cauhoichitietonline%2Fcreate&idcauhoi='.$idcauhoi.'', ['class' => 'btn btn-success left']) ?>
                    </p>
                    <table class="table table-header-bg">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'idcauhoi',
            'noidung',
            'da_dung',
            'da_nhieu1',
            'da_nhieu2',
            'da_nhieu3',
[
                                'format' => 'raw',
                                'value'=> function($data){
                                    return'
                                <a href="index.php?r=cauhoichitietonline%2Fupdate&id='.$data->id.'&idcauhoi='.$_GET['idcauhoi'].'" title="Update" aria-label="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a>';
                                }
                            ],
             ['class' => ActionColumn::className(),'template'=>'  {delete}']
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

