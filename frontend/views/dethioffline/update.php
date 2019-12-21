<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dethioffline */

$this->title = 'Update Dethioffline: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Dethiofflines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dethioffline-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
