<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Taskhistory */

$this->title = ' Task History';
$this->params['breadcrumbs'][] = ['label' => 'Taskhistories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taskhistory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,//'userName' => $userName
    ]) ?>

</div>
