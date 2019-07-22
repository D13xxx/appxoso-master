<?php

namespace backend\controllers;
use yii\web\UploadedFile;
use Yii;
use common\models\PhanTich;
use common\models\query\PhanTichQuery;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PhanTichController implements the CRUD actions for PhanTich model.
 */
class PhanTichController extends Controller
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
     * Lists all PhanTich models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PhanTichQuery();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PhanTich model.
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
     * Creates a new PhanTich model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PhanTich();

        if ($model->load(Yii::$app->request->post())) {
//            $thumbnail=UploadedFile::getInstance($model,'Thumbnail');
            $thumbnail= UploadedFile::getInstances($model,'Thumbnail');
            $fileDinhKem=[];

            Yii::$app->params['uploads']=Yii::getAlias('@images').'/uploads/chu-the/ho-gia-dinh/';
            $path=Yii::$app->params['uploads'].$thumbnail->name;
            $fileDinhKem[]=$thumbnail->name;
            $thumbnail->saveAs($path);
            $model->Thumbnail=implode(';',$fileDinhKem);

            if(!empty($thumbnail)){
                $tam=$anhNhanVien->name;
                Yii::$app->params['uploadAnh']=Yii::$app->basePath.'/web/images/nhan-su/';
                $path=Yii::$app->params['uploadAnh'].$tam;
                $model->anh_nhan_vien=$tam;
                $anhNhanVien->saveAs($path);
            }

            $model->CreateDate = date('Y-m-d');
            $model->Date = date('Y-m-d');
            if($model->save()){
                return $this->redirect(['view', 'id' => $model->ID]);
            }else{
                echo '<pre>';
                print_r($model->getErrors());
                die();
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PhanTich model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PhanTich model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PhanTich model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PhanTich the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PhanTich::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
