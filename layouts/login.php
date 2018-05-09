<?php

use backend\assets\LoginAsset;
use yii\helpers\Html;

LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
     



        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="module module-login span4 offset4">
                        <?= $content; ?>
                    </div>
                </div>
            </div>
        </div><!--/.wrapper-->

        <div class="footer">
            <div class="container">


                <b class="copyright">&copy; 2018 Team Pulse - UnityBees </b> <a>All rights reserved.</a>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

