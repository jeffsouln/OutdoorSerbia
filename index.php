<?php
require "config.php";
$form = isset($_GET['form'])?$_GET['form']:'main';
$page = isset($_GET['page'])?$_GET['page']:"main";
$cont = new Controller;
$cont->$page();


