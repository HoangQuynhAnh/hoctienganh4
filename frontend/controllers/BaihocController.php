<?php

namespace frontend\controllers;
use backend\models\Baihoc;
use yii\data\Pagination;


class BaihocController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionChude($id)
    {
    	$id=$_GET['id'];
    	$model= Baihoc::find()->where(['type' => $id])->all();

    	return $this->render('chude', [
                'model' => $model,
            ]);
    }


     public function actionSearch()
    {
       $name=$_GET['name'];
        $search=Baihoc::find()->where(['like', 'name', $name]);
        $countQuery = clone $search;
        $pages = new Pagination(['totalCount' =>  $countQuery->count()]);
         $pages->setPageSize(4);
          $search= $search->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
        return $this->render('search',[
            'search'=>$search,
             'pages' => $pages,
        ]);

    }

}
