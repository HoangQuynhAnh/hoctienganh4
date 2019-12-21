<?php

namespace backend\controllers;

use Yii;
use backend\models\Tuvungvideo;
use backend\models\Videomorong;
use backend\models\SearchTuvungvideo;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\Pagination;


/**
 * TuvungvideoController implements the CRUD actions for Tuvungvideo model.
 */
class TuvungvideoController extends Controller
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
     * Lists all Tuvungvideo models.
     * @return mixed
     */
    public function actionIndex()
    { 
        $id=$_GET['videoid'];
        $query = Videomorong::find()->where(['id'=>$id])->one();
        $tenvideo= $query->ten;
        $searchModel = new SearchTuvungvideo();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$id);
        $dataProvider->setPagination(['pageSize' => 10]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'tenvideo'=> $tenvideo,
            'idvideo'=>$id,
        ]);
    }

    /**
     * Displays a single Tuvungvideo model.
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
     * Creates a new Tuvungvideo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tuvungvideo();
        $id=$_GET['videoid'];
        if ($model->load(Yii::$app->request->post())) {
            $model->file=UploadedFile::getinstance($model,'file');
             if($model->file){
                $model->file->saveAs('../../uploads/audio/'.$model->file->name);
                $model->audio=$model->file->name;
                 }
                $model->idvideo=$id;
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        }


        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tuvungvideo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
             $model->file=UploadedFile::getinstance($model,'file');
             if(isset($model->file->name)){
             $model->audio=$model->file->name;
               $model->file->saveAs('../../uploads/audio/'.$model->file->name);
           }
             $model->save(false);
             return $this->redirect(['view', 'id' => $model->id]);
         }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tuvungvideo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect('index.php?r=videomorong');
    }

    /**
     * Finds the Tuvungvideo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tuvungvideo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tuvungvideo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
