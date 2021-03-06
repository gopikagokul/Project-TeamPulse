<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Task */

$this->title = 'Update Task: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="task-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,'projectName' => $projectName,'userName'=>$userName
    ]) ?>

</div>
