<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\Baionline;
use yii\data\Pagination;



/**
 * Site controller
 */
class KiemtraController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actionIndex()
    {
    	$kiemtraall=Baionline::find()->where(['loai' => 1]);
    	 $countQuery = clone $kiemtraall;
        $pages = new Pagination(['totalCount' =>  $countQuery->count()]);
       $pages->setPageSize(6);
        $kiemtra= $kiemtraall->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
         return $this->render('index', [
                'kiemtra' => $kiemtra, 
                'pages' => $pages,
          
            ]);
    }

      public function actionDs()
    {
    	$id=$_GET['id'];
        return $this->render('chitiet');
    }
}