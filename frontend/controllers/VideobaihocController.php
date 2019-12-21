<?php

namespace frontend\controllers;

use yii\data\Pagination;
use backend\models\Videobaihoc;
use backend\models\Baihoc;


class VideobaihocController extends \yii\web\Controller
{

     public function actionDs()
    {
        $id=$_GET['baihoc'];
        $tenbaihoc=Baihoc::find()->where(['id' => $id])->one();
        $tenbaihoc=$tenbaihoc->name;
        $videoall= Videobaihoc::find()->where(['type' => $id]);
        $countQuery = clone $videoall;
        $pages = new Pagination(['totalCount' =>  $countQuery->count()]);
       $pages->setPageSize(9);
        $video= $videoall->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
        return $this->render('chitiet', [
                'video' => $video,
                'idvideo'=>$id,
                'pages' => $pages,
                'tenbaihoc' => $tenbaihoc,

            ]);
    }

}
