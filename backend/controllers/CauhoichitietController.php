<?php

namespace backend\controllers;

use Yii;
use backend\models\Cauhoichitiet;
use backend\models\TimCauhoichitiet;
use backend\models\Cauhoi;
use yii\data\Pagination;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CauhoichitietController implements the CRUD actions for Cauhoichitiet model.
 */
class CauhoichitietController extends Controller
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
     * Lists all Cauhoichitiet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $cauhoichitiet=$_GET['idcauhoi'];
        $query = Cauhoi::find()->where(['id'=>$cauhoichitiet])->one();
         $tencauhoi= $query->ten;
        $searchModel = new TimCauhoichitiet();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$cauhoichitiet);
        $dataProvider->setPagination(['pageSize' => 10]);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
                'tencauhoi'=> $tencauhoi,
        ]);
    }

    /**
     * Displays a single Cauhoichitiet model.
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
     * Creates a new Cauhoichitiet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cauhoichitiet();
        $id=$_GET['idcauhoi'];

        if ($model->load(Yii::$app->request->post())){
            $model->idcauhoi=$id;
             $model->save(); 
            return $this->redirect('index.php?r=cauhoichitiet&idcauhoi='.$id.'');
        }

        return $this->render('create', [
            'model' => $model,
            'idcauhoi'=>$id,
        ]);
    }

    /**
     * Updates an existing Cauhoichitiet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
 $id=$_GET['idcauhoi'];
        if ($model->load(Yii::$app->request->post())) {
             $model->save();
            return $this->redirect('index.php?r=cauhoichitiet&idcauhoi='.$id.'');
        }

      
          return $this->redirect(['update', 'id' => $model->id]);
    }

    /**
     * Deletes an existing Cauhoichitiet model.
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
     * Finds the Cauhoichitiet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cauhoichitiet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cauhoichitiet::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
