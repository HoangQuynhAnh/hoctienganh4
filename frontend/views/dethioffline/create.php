<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Dethioffline */

$this->title = 'Create Dethioffline';
$this->params['breadcrumbs'][] = ['label' => 'Dethiofflines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dethioffline-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
