<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\TaskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Task History';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
     <div class="col-md-6">
   

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'project_id',
                'value' => function($data) {
                    return isset($data->project_id) ? $data->project->project_name : '';
                },
                'filter' => ArrayHelper::map(\backend\models\Project::find()->asArray()->all(), 'id', 'project_name'),
            ],
          [
                'attribute' => 'assigned_to',
                'value' => function($data) {
                    return isset($data->assigned_to) ? $data->assignedTo->firstname : '';
                },
                'filter' => ArrayHelper::map(\backend\models\User::find()->asArray()->all(), 'id', 'firstname'),
            ],
            'duration',
                        'task_desc',
            'created_date',
            'updated_date',
            //'created_by',
            //'updated_by',
             [
                'attribute' => 'status',
                'format' => 'raw',
                'filter' => array("10" => "Active", "20" => "Inactive"),
                'value' => function ($model, $key, $index, $widget) {
                    switch ($model->status) {
                        case 10:
                            return Html::a("Active", "#");
                            break;
                        case 20:
                            return Html::a("Inactive", "#");
                            break;
                    }
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>