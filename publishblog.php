<?php 
require_once "config.php";
if (isset($_POST['btn_submit'])) {
	$title = $_POST['tb_title'];
	$category = $_POST['sel_category'];
	$content = $_POST['ta_blog'];
	$user = $_POST['user_id'];
	$new_blog = new UploadBlog ($user,$title,$content,$category);
	$new_blog->Upload();
	header("Location: ".SITE_ROOT);
}