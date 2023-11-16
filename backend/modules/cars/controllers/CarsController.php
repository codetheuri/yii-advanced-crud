<?php

namespace backend\modules\cars\controllers;

use backend\modules\cars\models\Cars;
use backend\modules\cars\models\CarsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CarsController implements the CRUD actions for Cars model.
 */
class CarsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Cars models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'car';
        $searchModel = new CarsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cars model.
     * @param string $car_reg Car Reg
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($car_reg)
    {
        $this->layout = 'car';
        return $this->render('view', [
            'model' => $this->findModel($car_reg),
        ]);
    }

    /**
     * Creates a new Cars model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $this->layout = 'car';
        $model = new Cars();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {

                //get instance of uploaded file
                $imagename = $model->car_reg;
                $model->file = UploadedFile::getInstance($model, 'file');  
                $model->file->saveAs('uploads/'.$imagename.'.'.$model->file->extension);
                //save path in db column
                $model->logo = 'uploads/'.$imagename.'.'.$model->file->extension;


                return $this->redirect(['view', 'car_reg' => $model->car_reg]);
                 


            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Cars model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $car_reg Car Reg
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($car_reg)
    {   $this->layout = 'car';
        $model = $this->findModel($car_reg);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'car_reg' => $model->car_reg]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Cars model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $car_reg Car Reg
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($car_reg)
    {   $this->layout = 'car';
        $this->findModel($car_reg)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cars model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $car_reg Car Reg
     * @return Cars the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($car_reg)
    {   $this->layout = 'car';
        if (($model = Cars::findOne(['car_reg' => $car_reg])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
