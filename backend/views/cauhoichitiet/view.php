<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Cauhoichitiet */

$this->title = $model->noidung;
$this->params['breadcrumbs'][] = ['label' => 'Cauhoichitiets', 'url' => ['index']];
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
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'font btn btn-primary']) ?>
                    <?= Html::a('Danh sách câu hỏi chi tiết', ['index', 'cauhoichitiet&idcauhoi=' => $model->idcauhoi], ['class' => 'btn btn-info font']) ?>
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
            //'id',
            //'idcauhoi',
            'noidung',
            'da_dung',
            'da_nhieu1',
            'da_nhieu2',
            'da_nhieu3',
        ],
    ]) ?>
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
    .font{
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


