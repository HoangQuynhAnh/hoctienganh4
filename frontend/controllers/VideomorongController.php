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
use backend\models\Videomorong;
use backend\models\Tuvungvideo;
use yii\data\Pagination;


/**
 * Site controller
 */
class VideomorongController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actionIndex(){
     $Videomorongall= Videomorong::find();
        $countQuery = clone $Videomorongall;
       $pages = new Pagination(['totalCount' =>  $countQuery->count()]);
       $pages->setPageSize(9);
        $Videomorong = $Videomorongall->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
        return $this->render('index', [
            'Videomorong' => $Videomorong,
            'pages' => $pages,
        ]);
     
    	
    }
     public function actionDs($id)
    {
        $id=$_GET['id'];
        $Videomorong= Videomorong::find()->where(['id' => $id])->one();
     
        return $this->render('chitiet', [
                'Videomorong' => $Videomorong,
                'idvideo'=>$id,
            ]);
    }
   }