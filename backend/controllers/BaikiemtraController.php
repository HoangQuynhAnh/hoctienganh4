<?php

namespace backend\controllers;

use Yii;
use backend\models\Baikiemtra;
use backend\models\Baihoc;

use backend\models\TimBaikiemtra;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * BaikiemtraController implements the CRUD actions for Baikiemtra model.
 */
class BaikiemtraController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Baikiemtra models.
     * @return mixed
     */
    public function actionIndex()
    {
        $idbaihoc=$_GET['baihoc'];
        $query = Baihoc::find()->where(['id'=>$idbaihoc])->one();
        $tenbaihoc=$query->name;
        $searchModel = new TimBaikiemtra();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $idbaihoc);
          $dataProvider->setPagination(['pageSize' => 10]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'tenbaihoc'=>$tenbaihoc,
            'id'=>$idbaihoc
        ]);
    }


    /**
     * Displays a single Baikiemtra model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Baikiemtra model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Baikiemtra();
         $id=$_GET['baihoc'];


        if ($model->load(Yii::$app->request->post()) ) {
              $model->idbaihoc=$id;
             $model->save();
             return $this->redirect('index.php?r=baikiemtra&baihoc='.$id.'');
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Baikiemtra model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
          $id=$_GET['baihoc'];
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
              return $this->redirect('index.php?r=baikiemtra&baihoc='.$id.'');
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Baikiemtra model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect('index.php?r=baihoc');
    }

    /**
     * Finds the Baikiemtra model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Baikiemtra the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Baikiemtra::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
