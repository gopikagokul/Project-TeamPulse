<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
          [
                'attribute' => 'user_role_id',
                'value' => function($data) {
                    return isset($data->user_role_id) ? $data->userRole->role_name : '';
                },
                'filter' => ArrayHelper::map(\backend\models\UserRole::find()->asArray()->all(), 'id', 'role_name'),
            ],
           'firstname', 
            'lastname',
            'dob',
            'gender',
            'address',
            'phno',
            'username',
            'profile_image',
            'password_hash',
            'auth_key',
            'password_reset_token',
            'email:email',
            'status',
            'created_at',
            'updated_at',
          
        ],
    ]) ?>

</div>
