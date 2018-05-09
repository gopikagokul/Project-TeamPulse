<?php

namespace backend\controllers;

use Yii;
use backend\models\Task;
use backend\models\TaskSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * TaskController implements the CRUD actions for Task model.
 */
class TaskController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
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
     * Lists all Task models.
     * @return mixed
     */
    public function actionIndex() {
       $this->layout = 'dashboard';
        $searchModel = new TaskSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    
    
    public function actionTaskhistory() {
       $this->layout = 'dashboard';
        $searchModel = new TaskSearch();
        $dataProvider = $searchModel->tasksearch(Yii::$app->request->queryParams);

        return $this->render('taskhistory', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    
    
    /**
     * Displays a single Task model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Task model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
//        $this->layout = 'dashboard';
        $model = new Task();
        
        $projectName =\backend\models\Project::find()->all();
            
        $userName = \backend\models\User::find()->all();
//           echo '<pre>';
//            print_r($userName);  
//            print_r($projectName);
//           die();
        if ($model->load(Yii::$app->request->post())) {
//       && $model->save()
         
               $model->save(false);
            //echo "success";die;
            Yii::$app->session->setFlash('success', "Created successfully");
                return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('create', [
                    'model' => $model,'projectName' => $projectName,'userName'=>$userName
        ]);
    }

    /**
     * Updates an existing Task model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
          $projectName =\backend\models\Project::find()->all();
            
        $userName = \backend\models\User::find()->all();
//           echo '<pre>';
//            print_r($userName);  
//            print_r($projectName);
//           die();
        if ($model->load(Yii::$app->request->post())) {
//       && $model->save()
         
               $model->save(false);
            //echo "success";die;
            Yii::$app->session->setFlash('success', "Created successfully");
                return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', [
                    'model' => $model,'projectName' => $projectName,'userName'=>$userName
        ]);
    }

    /**
     * Deletes an existing Task model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Task model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Task the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Task::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
