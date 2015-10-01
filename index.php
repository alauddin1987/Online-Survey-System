<?php 
include('view/system/standerd_include.php');
$model = ($_REQUEST['page'])?$_REQUEST['page']:'login';
include('model/'.$model.'Model.php');
include('controller/'.$model.'Controller.php');
include("view/$model/".$model.'.php');
?>
<html>
<head>
<link rel="stylesheet" href="view/css/main.css" type="text/css">
</head>

