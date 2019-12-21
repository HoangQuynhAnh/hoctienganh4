<?php

namespace backend\controllers;

use Yii;
use backend\models\Cauhoichitietonline;
use backend\models\Cauhoionline;
use backend\models\SearchCauhoichitietonline;

use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CauhoichitietonlineController implements the CRUD actions for Cauhoichitietonline model.
 */
class CauhoichitietonlineController extends Controller
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
     * Lists all Cauhoichitietonline models.
     * @return mixed
     */
    public function actionIndex()
    {
        $cauhoichitiet=$_GET['idcauhoi'];
        $query = Cauhoionline::find()->where(['id'=>$cauhoichitiet])->one();
            $tencauhoi= $query->ten;
       $searchModel = new SearchCauhoichitietonline();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$cauhoichitiet);
         $dataProvider->setPagination(['pageSize' => 10]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
             'tencauhoi'=> $tencauhoi,
        ]);
    }

    /**
     * Displays a single Cauhoichitietonline model.
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
     * Creates a new Cauhoichitietonline model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cauhoichitietonline();
    $id=$_GET['idcauhoi'];
        if ($model->load(Yii::$app->request->post()) ) {
              $model->idcauhoi=$id;
             $model->save(false); 
            return $this->redirect('index.php?r=cauhoichitietonline&idcauhoi='.$id.'');
        }

        return $this->render('create', [
            'model' => $model,
             'idcauhoi'=>$id,
        ]);
    }

    /**
     * Updates an existing Cauhoichitietonline model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
  $id=$_GET['idcauhoi'];
        if ($model->load(Yii::$app->request->post()) ) {
            $model->save(false);
            return $this->redirect('index.php?r=cauhoichitietonline&idcauhoi='.$id.'');
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Cauhoichitietonline model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect('index.php?r=baionline');
    }

    /**
     * Finds the Cauhoichitietonline model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cauhoichitietonline the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cauhoichitietonline::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
