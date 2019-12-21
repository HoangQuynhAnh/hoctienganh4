<?php

namespace backend\controllers;

use Yii;
use backend\models\Cauhoi;
use backend\models\TimCauhoi;
use backend\models\Baikiemtra;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * CauhoiController implements the CRUD actions for Cauhoi model.
 */
class CauhoiController extends Controller
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
     * Lists all Cauhoi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $baihoc=$_GET['baikiemtra'];
        $query = Baikiemtra::find()->where(['id'=>$baihoc])->one();
        $tenbaihoc= $query->ten;
        $searchModel = new TimCauhoi();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$baihoc);
        $dataProvider->setPagination(['pageSize' => 10]);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'tenbaihoc'=> $tenbaihoc,
        ]);
    }

    /**
     * Displays a single Cauhoi model.
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
     * Creates a new Cauhoi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cauhoi();
         $id=$_GET['baikiemtra'];

        if ($model->load(Yii::$app->request->post()) ) {
             $model->idbaihoc=$id;
            $model->save(false);

            return $this->redirect('index.php?r=cauhoi&baikiemtra='.$id.'');
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Cauhoi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
         $id=$_GET['baikiemtra'];
        if ($model->load(Yii::$app->request->post())) {
             
              $model->save(false);
           return $this->redirect('index.php?r=cauhoi&baikiemtra='.$id.'');
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Cauhoi model.
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
     * Finds the Cauhoi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cauhoi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cauhoi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
