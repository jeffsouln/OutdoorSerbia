<?php 
require_once "config.php";
if (isset($_POST['btn_submit'])) {
	$title = $_POST['tb_title'];
	$sub_title = $_POST['ta_sub_title'];
	$category = $_POST['sel_category'];
	$content = $_POST['ta_news'];
	$new_blog = new UploadNews ($title,$sub_title,$content,$category);
	$new_blog->Upload();
	header("Location: ".SITE_ROOT);
}