<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Videomorong */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Videomorongs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<<div class="main-panel" style=" font-size: 16px;">
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
            'id',
            'ten',
            'link',
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
    

.font{
    font-size: 16px;
}
</style>