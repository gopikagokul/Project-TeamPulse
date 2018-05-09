<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UserRole */

$this->title = 'Update User Role: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'User Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-role-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
