<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UserRole */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-role-form">
  
    <?php $form = ActiveForm::begin(); ?>
    
 <div class="col-md-6">
    <?= $form->field($model, 'role_name')->textInput(['maxlength' => true,'style'=>'height:35px']) ?>
</div>
    <br>
    <div class="col-md-12">
        <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
     </div>
    </div> 
    <?php ActiveForm::end(); ?>

</div>
