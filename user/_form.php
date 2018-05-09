<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;


/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
    
<div class="user-form">



    
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="col-md-6" style="size:  30px">
           
          <?= $form->field($model, 'user_role_id')->dropDownList(ArrayHelper::map($userRole, 'id', 'role_name'), 
                    ['prompt' => 'Select Role', 'class' => 'form-control']) ?>
  <?= $form->field($model, 'firstname')->textInput(['maxlength'=>true,'style'=>'height:35px','class'=>'form-control']) ?>

        <?= $form->field($model, 'lastname')->textInput(['maxlength' => true,'style'=>'height:35px']) ?>
        
 <label class="control-label"> Date of birth</label>
  <?= DatePicker::widget([
      
    'name' => 'dob',
    'value' => '16-03-2018',
    'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy',
        
        ]
]);?>

         <?= $form->field($model, 'gender')->radioList([1 => 'Male', 2 => 'Female',]); ?>       

        <?= $form->field($model, 'address')->textarea(['maxlength' => true,'style'=>'height:100px']) ?>
        
        
        
        
    </div>
    <div class="col-md-6">
           <?php
            if (isset($model->profile_image) && ($model->profile_image != '')) {
                $url = Yii::$app->request->baseUrl . '/uploads/user/' . $model->profile_image;
                echo Html::img($url, ['width' => '70', 'height' => '40', 'class' => 'designimg']);
            } else {
                ?>
                <img src = "<?php echo Yii::$app->request->baseUrl . '/images/profile.png'; ?>"  style="max-height: 75px;">
                <?php
            }

            echo $form->field($model, 'profile_image')->fileInput()
            ?>  
        
        
      
        <?= $form->field($model, 'phno')->textInput(['maxlength' => true,'style'=>'height:35px']) ?>
        
        <?= $form->field($model, 'email')->textInput(['maxlength' => true,'style'=>'height:35px']) ?>

        <?= $form->field($model, 'username')->textInput(['maxlength' => true,'style'=>'height:35px']) ?>

        <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true,'style'=>'height:35px']) ?>

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
