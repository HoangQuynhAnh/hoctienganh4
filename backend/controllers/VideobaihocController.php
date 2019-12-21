<?php

namespace backend\controllers;

use Yii;
use backend\models\Videobaihoc;
use backend\models\Baihoc;
use backend\models\TimVideobaihoc;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\web\UploadedFile;




/**
 * VideobaihocController implements the CRUD actions for Videobaihoc model.
 */
class VideobaihocController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Videobaihoc models.
     * @return mixed
     */
    public function actionIndex()
    {
          $baihoc=$_GET['baihoc'];
           $query = Baihoc::find()->where(['id'=>$baihoc])->one();
        $tenbaihoc= $query->name;
        $searchModel = new TimVideobaihoc();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$baihoc);
        $dataProvider->setPagination(['pageSize' => 10]);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
             'tenbaihoc'=> $tenbaihoc,
            'baihoc'=>$baihoc,
        ]);
    }

    /**
     * Displays a single Videobaihoc model.
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
     * Creates a new Videobaihoc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Videobaihoc();
          $id=$_GET['baihoc'];
        if ($model->load(Yii::$app->request->post()) ) {
             $model->file=UploadedFile::getinstance($model,'file');
                 if($model->file){
                $model->file->saveAs('../../uploads/video/'.$model->file->name);
                $model->link=$model->file->name;

                 }
                $model->type=$id;
             $model->save(false);
            return $this->redirect('index.php?r=videobaihoc&baihoc='.$id.'');
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Videobaihoc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

       if ($model->load(Yii::$app->request->post()) ) {
             $model->file=UploadedFile::getinstance($model,'file');
              if(isset($model->file->name)){
             $model->link=$model->file->name;
               $model->file->saveAs('../../uploads/tuvung/'.$model->file->name);
                  $model->save(false);
           }
            return $this->redirect('index.php?r=baihoc');
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Videobaihoc model.
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
     * Finds the Videobaihoc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Videobaihoc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Videobaihoc::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
