<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\TaskHistorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="taskhistory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

  <div class="col-md-6">
      
         
          <?= $form->field($model, 'assigned_to')->textInput([ 'class' => 'form-control','style'=>'height:45px']) ?>

          <?= $form->field($model, 'assigned_to')->dropDownList(ArrayHelper::map($userName, 'id', 'firstname'), 
                    ['prompt' => 'Select User', 'class' => 'form-control']) ?>
</div><br> <div class="col-md-12">
    <div class="form-group">
       
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div></div>

    <?php ActiveForm::end(); ?>

</div>
