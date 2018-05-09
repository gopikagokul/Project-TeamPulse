<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="col-md-6">
  

    <?= $form->field($model, 'project_name')->textInput(['maxlength' => true,'style'=>'height:35px']) ?>

    
 <label class="control-label"> Start date</label>
      <?= DatePicker::widget([
          
    'name' => 'start_date',
    'value' => '14-03-2018',
          
    'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
       
            
        ]
]);?>
     </div>
    <div class="col-md-6">
      
 <label class="control-label"> End Date</label>
         <?= DatePicker::widget([
    'name' => 'end_date',
    'value' => '14-03-2018',
    'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
]);?>

         <br>


     <?= $form->field($model, 'status')->dropDownList(['10'=>'Active','0'=>'Inactive']  ); ?>
 </div>
    <br>
    <div class="col-md-12">
        <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
