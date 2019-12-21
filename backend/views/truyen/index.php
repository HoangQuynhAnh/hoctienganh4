<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TimTruyen */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Truyện';
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
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn',
                            ],
                            'ten',
                            [
                                'attribute'=>'anh',
                                'format' => 'html',
                                'value'=>function($data)
                                {
                                    return Html::img("../../uploads/truyen/".$data->anh."", ['class'=>'thing']);
                                },
                            ],

                            'tieude',

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
</style>

<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<style>
    .table td img{
        width: 150px;
        height: 120px;
        border-radius:5px;
    }
    .table td {
   height: 20px;
}
.bg-red{
    color: red;
}
</style>