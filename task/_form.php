<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Task */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-form">
    
<div class="col-md-6">
    <?php $form = ActiveForm::begin(); ?>



          <?= $form->field($model, 'project_id')->dropDownList(ArrayHelper::map($projectName, 'id', 'project_name'), 
                    ['prompt' => 'Select Project', 'class' => 'form-control']) ?>

          <?= $form->field($model, 'assigned_to')->dropDownList(ArrayHelper::map($userName, 'id', 'firstname'), 
                    ['prompt' => 'Select User', 'class' => 'form-control']) ?>
    
    <?= $form->field($model, 'task_desc')->textInput([ 'class' => 'form-control','style'=>'height:45px']) ?>
</div>
    <div class="col-md-6">
    <?= $form->field($model, 'duration')->textInput([ 'class' => 'form-control','style'=>'height:35px']) ?>

 
     <?= $form->field($model, 'status')->dropDownList(['10'=>'Active','0'=>'Inactive']) ?>
</div>
    <br>
    <div class="col-md-12">
        <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
