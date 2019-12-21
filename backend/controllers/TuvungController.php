<?php

namespace backend\controllers;

use Yii;
use backend\models\Tuvung;
use backend\models\Baihoc;
use backend\models\SearchTuvung;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\Pagination;


/**
 * TuvungController implements the CRUD actions for Tuvung model.
 */
class TuvungController extends Controller
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
     * Lists all Tuvung models.
     * @return mixed
     */
    public function actionIndex()
    {
        $baihoc=$_GET['baihoc'];
        $query = Baihoc::find()->where(['id'=>$baihoc])->one();
        // var_dump($query);
        // die();
          $tenbaihoc= $query->name;
        $searchModel = new SearchTuvung();
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
     * Displays a single Tuvung model.
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
     * Creates a new Tuvung model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tuvung();
         $id=$_GET['baihoc'];
        if ($model->load(Yii::$app->request->post()) ) {
            $model->fileAudio=UploadedFile::getinstance($model,'fileAudio');
             $model->file=UploadedFile::getinstance($model,'file');
                 if($model->fileAudio){
                $model->fileAudio->saveAs('../../uploads/tuvung/'.$model->fileAudio->name);
                $model->audio=$model->fileAudio->name;

                 }
                $model->idbaihoc=$id;
             $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tuvung model.
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
             $model->fileAudio=UploadedFile::getinstance($model,'fileAudio');

             if(isset($model->file->name)){
             $model->anh=$model->file->name;
               $model->file->saveAs('../../uploads/tuvung/'.$model->file->name);
           }
            if(isset($model->fileAudio->name)){
             $model->audio=$model->fileAudio->name;
               $model->fileAudio->saveAs('../../uploads/tuvung/'.$model->fileAudio->name);
           }

             $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tuvung model.
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
     * Finds the Tuvung model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tuvung the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tuvung::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
