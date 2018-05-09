<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Taskhistory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="taskhistory-form">
<div class="col-md-6">
    <?php $form = ActiveForm::begin(); ?>

          

          <?= $form->field($model, 'assigned_to')->dropDownList(ArrayHelper::map($userName, 'id', 'firstname'), 
                    ['prompt' => 'Select User', 'class' => 'form-control']) ?>
</div>
    <div class="form-group">
        <div class="col-md-12">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>  </div>

    <?php ActiveForm::end(); ?>

</div>
