<?php

use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\helpers\Url;

DashboardAsset::register($this);
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
        

        <div class="navbar navbar-fixed-top" style="font-family: cursive">
            <div class="navbar-inner "style="background-color: #2d2b34" >
                <div class="container-fluid ">
                    <a class="btn btn-navbar"data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded" ></i></a><a class="brand" style="color: white" href="index.php">TEAM PULSE </a>
                       
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
      <a href="<?php echo Url::to(['site/logout']); ?>" data-method="POST" style="color: white"> &nbsp;Logout</a> </div>





<div class="nav-collapse collaps pull-right ">
                     
<!--                        <form class="navbar-search  input-append" action="#">
                            <input type="text" p class="span3">
                            <button class="glyphicon glyphicon-search  pull-right" type="button" style="width: 40px;height: 21px">
                               
                            </button>
                        </form>-->
<!--                        <ul class="nav pull-right">
                           
                   
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color: #2d2b34">
                                    <img src="../web/images/user.png" class="nav-avatar" />
                                    <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                   
                                    
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>-->
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row" >
                    <div class="col-sm-3" >
                        <div class="sidebar">
                            
                            <ul class="widget widget-menu unstyled"  >
                               
                                <div class="user-img-div" style="background-color: #2d2b34">
                                    <br>
                                    <center>
                                    <img src="../web/images/10.jpg" class="img-circle" style="width: 100px" >
                                  </center><center><br>
                                      <b class="glyphicon glyphicon-stop" style="color: #62c462"></b>
                                     <b style="color: white; "> online</b> </center>
                   
<!--<div class="fileUpload btn-warning" style="width: 85px">
    
    <input  type="file" accept="image/*" onchange="loadFile(event)" class="/upload"/>
    </div>
<script>
    var loadFile = function(event)
    {
        var output =document.grtElementById('output');
        output.src =URL.createObjectURL(event.target.files[0]);
    };
    
    </script>-->
    
    

                         

<!--                                <small style="font-family: cursive;color: white;">Last Login : 2 Days Ago </small>-->
                              
                
                      
                        <li class="dropdown-submenu"  ><a href="http://localhost/teampulse/backend/web/index.php" style="color: white">
                                  <i class="menu-icon" x></i>Dashboard <b class="glyphicon glyphicon-dashboard  pull-left" style="color: white"></b>
                                    </a></li>
                                    
                                    <li class="dropdown-submenu"><a href="http://localhost/teampulse/backend/web/index.php?r=user%2Findex" style="color: white">
                                        <i class="menu-icon "></i>User <b class="glyphicon glyphicon-user  pull-left" style="color: white"></b></a>
                                </li>
                                <li class="dropdown-submenu"><a href="http://localhost/teampulse/backend/web/index.php?r=userrole%2Findex" style="color: white">
                                        <i class="menu-icon "></i>User Role <b class="glyphicon glyphicon-user pull-left" style="color: white">
                                            </b> </a>
                                </li>
                                 <li class="dropdown-submenu"><a href="http://localhost/teampulse/backend/web/index.php?r=project%2Findex" style="color: white">
                                    <i class="menu-icon "></i>Project  <b class="glyphicon glyphicon-file   pull-left" style="color: white"></b> </a>
                                </li>
                                <li class="dropdown-submenu"><a href="http://localhost/teampulse/backend/web/index.php?r=task%2Findex" style="color: white">
                                        <i class="menu-icon "></i> Task Details<b class="glyphicon glyphicon-tasks   pull-left" style="color: white"></b></a>
                                </li>
                                 <li class="dropdown-submenu"><a href="http://localhost/teampulse/backend/web/index.php?r=task/taskhistory" style="color: white">
                                        <i class="menu-icon "></i> Task History<b class="glyphicon glyphicon-home   pull-left" style="color: white"></b></a>
                                </li> 
       

                                 <li class="dropdown-submenu"><a href="" style="color: white">
                                        <i class="menu-icon "></i> Settings <b class="glyphicon glyphicon-home   pull-left" style="color: white"></b></a>
                                </li> 
                                        <!--                                      <ul>
                                            <a href="" style="color: white" > <i class="menu-icon  "></i> 
                                                Edit Profile<b class="glyphicon glyphicon-pencil  pull-left" style="color: white">
                                                    
                                                </b></a>
                                       </ul>-->
                                    
                            
                            </ul>
                                
                        </div>
                                
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                     
                         <div class="row"><div  class="col-sm-8"><?= $content;?></div>
                             
                     
                         </div>

                         </div>
                  
                    <!--/.span9-->
                </div>
        
         
            <!--/.container-->
        </div><!--/.wrapper-->

        <div class="footer" style="background-color: #2d2b34">
            <div class="container">
            
                <b class="copyright"style="color:white" >&copy; 2018 Team Pulse - UnityBees </b><b style="color: white"> All rights reserved.</>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
