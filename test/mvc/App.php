<?php
require('Controller.php');
require('Model.php');
require('View.php');
/**
 * Created by IntelliJ IDEA.
 * User: wjr
 * Date: 16-6-14
 * Time: 下午4:11
 */
$model = new Model();
$controller = new Controller($model);
$view = new View($model);

echo $view->output();