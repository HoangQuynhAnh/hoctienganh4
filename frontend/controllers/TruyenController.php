<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use backend\models\Truyen;
use backend\models\TimTruyen;
use yii\data\Pagination;


/**
 * Site controller
 */
class TruyenController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actionIndex($id)
    {
    	$id=$_GET['id'];
    	$truyen= Truyen::find()->where(['anh' => $id])->one();
    	return $this->render('index', [
                'truyen' => $truyen,
            ]);
    }
     public function actionDs()
    {
     
       $truyenall= Truyen::find();
        $countQuery = clone $truyenall;
       $pages = new Pagination(['totalCount' =>  $countQuery->count()]);
       $pages->setPageSize(9);
        $truyen = $truyenall->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
        return $this->render('truyen', [
            'truyen' => $truyen,
            'pages' => $pages,
        ]);
    }
}