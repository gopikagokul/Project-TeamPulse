<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TaskHistorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Task Histories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taskhistory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel,'userName'=>'$userName']); ?>
    
   
</div>