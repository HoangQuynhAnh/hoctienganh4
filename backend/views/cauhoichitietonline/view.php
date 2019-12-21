<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Cauhoichitietonline */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cauhoichitietonlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cauhoichitietonline-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
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
            'idcauhoi',
            'noidung',
            'da_dung',
            'da_nhieu1',
            'da_nhieu2',
            'da_nhieu3',
        ],
    ]) ?>

</div>
