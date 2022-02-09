<?php

namespace app\controllers;

use app\models\Akun2;
use app\models\Akun2Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Akun2Controller implements the CRUD actions for Akun2 model.
 */
class Akun2Controller extends Controller
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
     * Lists all Akun2 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new Akun2Search();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Akun2 model.
     * @param int $kd_akun1 Kd Akun1
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_akun1)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_akun1),
        ]);
    }

    /**
     * Creates a new Akun2 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Akun2();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_akun1' => $model->kd_akun1]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Akun2 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $kd_akun1 Kd Akun1
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_akun1)
    {
        $model = $this->findModel($kd_akun1);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_akun1' => $model->kd_akun1]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Akun2 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $kd_akun1 Kd Akun1
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_akun1)
    {
        $this->findModel($kd_akun1)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Akun2 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $kd_akun1 Kd Akun1
     * @return Akun2 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_akun1)
    {
        if (($model = Akun2::findOne(['kd_akun1' => $kd_akun1])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
