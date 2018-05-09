<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?> 
<div class="content" style="width: 1000px">
    <div class="btn-controls">
        <div class="btn-box-row row-fluid">
           <a href="#" class="btn-box big span4">
                <b style="float: right"> <?php echo \backend\models\User::find()->count(); ?>
              
                <p class="text-muted">Users</p> </b>
                <i class="glyphicon glyphicon-user" style="float: left"></i>
              <br>
                <p class="text-muted" style="float: left">User Growth</p>
            </a>
              
                 <a href="#" class="btn-box big span4">
                     <b style="float: right"> <?php echo \backend\models\Project::find()->count(); ?>
              
                <p class="text-muted">Project</p> </b>
                <i class="glyphicon glyphicon-duplicate" style="float: left"></i>
              <br>
                <p class="text-muted" style="float: left">Completed Based</p>
            </a>   <a href="#" class="btn-box big span4">
                <b style="float: right"> <?php echo \backend\models\Task::find()->count(); ?>
              
                <p class="text-muted">Tasks</p> </b>
                <i class="glyphicon glyphicon-tasks" style="float: left"></i>
              <br>
                <p class="text-muted" style="float: left">Updated</p>
            </a> 
        </div>
                                <div class="btn-box container-fluid">
              
                                    <ul class="widget widget-usage unstyled span10">
                                        <h2>Projects</h2>
                                        <li>
                                            <p>
                                                <strong>Completed Projects</strong> <span class="pull-right small muted"></span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar" style="width: 78%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Pending Projects</strong> <span class="pull-right small muted"></span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-success" style="width: 56%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Returned Projects</strong> <span class="pull-right small muted"></span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-warning" style="width: 44%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Canceled Projects</strong> <span class="pull-right small muted"></span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-danger" style="width: 67%;">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/#btn-controls-->
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    