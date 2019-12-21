<?php

namespace frontend\controllers;

use yii\data\Pagination;
use backend\models\Tuvung;
use backend\models\Baihoc;


class TuvungController extends \yii\web\Controller
{
    public function actionIndex(){
     $tuvungall= Tuvung::find();
        $countQuery = clone $tuvungall;
       $pages = new Pagination(['totalCount' =>  $countQuery->count()]);
       $pages->setPageSize(9);
        $tuvung= $tuvungall->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
        return $this->render('index', [
            'tuvung' => $tuvung,
            'pages' => $pages,
        ]);  	
    }

     public function actionDs()
    {
        
        $id=$_GET['baihoc'];
        $tenbaihoc=Baihoc::find()->where(['id' => $id])->one();
        $tenbaihoc=$tenbaihoc->name;
        $tuvungall= Tuvung::find()->where(['idbaihoc' => $id]);
        $countQuery = clone $tuvungall;
        $pages = new Pagination(['totalCount' =>  $countQuery->count()]);
       $pages->setPageSize(9);
        $tuvung= $tuvungall->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
        return $this->render('chitiet', [
                'tuvung' => $tuvung,
                'idtuvung'=>$id,
                'pages' => $pages,
                'tenbaihoc' => $tenbaihoc,

            ]);
    }

}
