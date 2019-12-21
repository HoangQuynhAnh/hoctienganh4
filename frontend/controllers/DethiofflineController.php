<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;
use backend\models\Dethioffline;


/**
 * Site controller
 */
class DethiofflineController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actionIndex()
    {
    	$dethiall=Dethioffline::find();
    	 $countQuery = clone $dethiall;
        $pages = new Pagination(['totalCount' =>  $countQuery->count()]);
       $pages->setPageSize(9);
        $dethi= $dethiall->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
         return $this->render('index', [
                'dethi' => $dethi,
                'pages' => $pages,
               
            ]);

    }
}