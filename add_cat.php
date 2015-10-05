<?php 
require_once "config.php";
if (isset($_POST['btn_submit'])) {
	$new_cat = New Category;
	$new_cat->name = $_POST['tb_new_cat'];
	$new_cat->insert();
	header("Location: ".SITE_ROOT."personal");
}