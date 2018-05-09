<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

<div class="auth-box " >
                        <div class="left" >
                            
<div class="content">
    <div class="header">
        
         <div class="logo text-center"><img src="<?= Yii::$app->request->baseUrl ?>/images/10.jpg" style="width: 100px"  alt="TeamPulse Logo"></div>
    
    </div>
    <center>
    <h3 style="font-family: cursive">Log In To Your Account</h3></center>
</div>
<div class="form-group">
    <div class="control-group">
        <div class="controls row-fluid"><center>
            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => "span10",'style'=>'height:40px']) ?>

     
            <?= $form->field($model, 'password')->passwordInput(['class' => "span10",'style'=>'height:40px']) ?>
</center>
        </div>
    </div>
</div>
<div class="module-foot">
    <div class="control-group">
        <div class="controls clearfix"><center>
             <?= $form->field($model, 'rememberMe')->checkbox() ?></center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-lg', 'name' => 'login-button','style'=>'width:88% ']) ?>           
           
        </div>
    </div>
</div>
                        </div></div>

<?php ActiveForm::end(); ?>

