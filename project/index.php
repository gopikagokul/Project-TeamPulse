<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'project_name',
            'start_date',
            'end_date',
            'created_date',
            'updated_date',
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
        //'created_by',
        //'updated_date',
        //'updated_by',
        //'status',

        ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
