<?php

namespace backend\controllers;

use Yii;
use backend\models\Taskhistory;
use backend\models\TaskHistorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TaskhistoryController implements the CRUD actions for Taskhistory model.
 */
class TaskhistoryController extends Controller
{
    /**
     * @inheritdoc
     */
//      public $layout = 'dashboard';
    public function behaviors()
    {
        return [
             'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    
                    [
                        'actions' => ['view', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Taskhistory models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = 'dashboard';
      $userName =\backend\models\User::find()->all();
//             echo '<pre>';
//            print_r($userName);            
//            die();
        $searchModel = new TaskHistorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'userName' => $userName,
         
        ]);
    }

    /**
     * Displays a single Taskhistory model.s
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
     * Creates a new Taskhistory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Taskhistory();
        
       // $userName =\backend\models\User::find()->all();
        if ($model->load(Yii::$app->request->post()) ) {
            //&& $model->save()
               $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,//'userName' => $userName
        ]);
    }

    /**
     * Updates an existing Taskhistory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
      //  $userName =\backend\models\User::find()->all();
        if ($model->load(Yii::$app->request->post()) ) 
            //&& $model->save()
        {
            
              $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,//'userName' => $userName
        
        ]);
    }

    /**
     * Deletes an existing Taskhistory model.
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
     * Finds the Taskhistory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Taskhistory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Taskhistory::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
