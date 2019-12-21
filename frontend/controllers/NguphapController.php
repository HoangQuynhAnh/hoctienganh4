<?php

namespace frontend\controllers;

use yii\data\Pagination;
use backend\models\Nguphap;
use backend\models\Baihoc;


class NguphapController extends \yii\web\Controller
{
     public function actionDs()
    { 
        $id=$_GET['baihoc'];
        $tenbaihoc=Baihoc::find()->where(['id' => $id])->one();
        $tenbaihoc=$tenbaihoc->name;
        $nguphapall= Nguphap::find()->where(['idbaihoc' => $id]);
        $countQuery = clone $nguphapall;
        $pages = new Pagination(['totalCount' =>  $countQuery->count()]);
       $pages->setPageSize(9);
        $nguphap= $nguphapall->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
        return $this->render('chitiet', [
                'nguphap' => $nguphap,
                'idnguphap'=>$id,
                'pages' => $pages,
                'tenbaihoc' => $tenbaihoc,

            ]);
    }

}
