<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Tuvungvideo */

$this->title = $model->ten;
$this->params['breadcrumbs'][] = ['label' => 'Tuvungvideos', 'url' => ['index']];
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
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary font']) ?>
                    <?= Html::a('Danh sách từ vựng của video', ['index', 'videoid' => $model->idvideo], ['class' => 'btn btn-info font']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger font',
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
                        [
                            'attribute'=>'loaitu',
                            'value'=>function($data)
                            {
                                if($data->loaitu=='1')
                                {
                                    return 'Danh từ';
                                }
                                elseif ($data->loaitu=='2') {
                                    return 'Động từ';
                                }
                                elseif ($data->loaitu=='3') {
                                    return 'Trạng từ';
                                }
                                elseif ($data->loaitu=='4') {
                                    return 'Tính từ';
                                }
                                else{
                                    return 'Giới từ';
                                }
                                
                            }

                            
                        ],
                        'phienam',
                        'nghia',
                        'audio',
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

.font{
    font-size: 16px;
}
.table td{
    font-size: 16px;
    margin: 10px
}
</style>