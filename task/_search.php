<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
$userName = \backend\models\User::find()->all();
/* @var $this yii\web\View */
/* @var $model backend\models\TaskSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-search">

    <?php
    $form = ActiveForm::begin([
                'action' => ['taskhistory'],
                'method' => 'get',
    ]);
    ?>
    <?php /*
      <?= $form->field($model, 'id') ?>

      <?= $form->field($model, 'project_id') ?>
     *   <?= $form->field($model, 'duration') ?>

      <?= $form->field($model, 'created_date') ?>

      <?php // echo $form->field($model, 'created_by') ?>

      <?php // echo $form->field($model, 'updated_date') ?>

      <?php // echo $form->field($model, 'updated_by') ?>

      <?php // echo $form->field($model, 'status') ?>
     * 
     * 
     */ ?>
 <div class="col-md-6">
    <?= $form->field($model, 'assigned_to')->dropDownList(ArrayHelper::map($userName, 'id', 'firstname'), ['prompt' => 'Select User', 'class' => 'form-control'])
    ?> 
 </div>


    <div class="form-group">
        
 <div class="col-md-12">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
