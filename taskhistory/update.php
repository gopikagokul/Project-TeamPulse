<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Taskhistory */

$this->title = 'Update Taskhistory: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Taskhistories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="taskhistory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,'userName' => $userName
    ]) ?>

</div>
