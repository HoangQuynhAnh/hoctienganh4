<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class TrangchuController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}