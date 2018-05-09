<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Settings';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-index">


    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView:: widget
            ([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'firstname',
            'lastname',
            'dob',
          'gender',
            'address',
            'phno',
            'username',
            //  'password_hash',
            //'auth_key',
            // 'password_hash',
            // 'password_reset_token',
           // 'user_role_id',
            [
                'attribute' => 'user_role_id',
                'value' => function($data) {
                    return isset($data->user_role_id) ? $data->userRole->role_name : '';
                },
                'filter' => ArrayHelper::map(\backend\models\UserRole::find()->asArray()->all(), 'id', 'role_name'),
            ],
            'email:email',
            'profile_image',
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
            //'created_at',
            //'updated_at',
            ['class' => 'yii\grid\ActionColumn'],
        ], 'tableOptions' => ['class' => 'table table-bordered'],
    ]);
    ?></div>
</div>
