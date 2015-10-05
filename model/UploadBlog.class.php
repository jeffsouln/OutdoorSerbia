<?php
class UploadBlog {
	public $title;
	public $user;
	public $content;
	public $category;

	public function __construct ($user,$title,$content,$category){
		$this->user = $user;
		$this->title = $title;
		$this->content = $content;
		$this->category = $category;
}
	public function Upload(){
		$db = DB::getInstance();
		$st = $db->prepare("INSERT INTO `blogs` values (null, :user, :title, :content, now(),'','')");
		$st->bindParam(':user', $this->user);
		$st->bindParam(':title', $this->title);
		$st->bindParam(':content', $this->content);
		$st->execute();
		$lastId = $db->lastInsertId();
		$st = $db->prepare("INSERT INTO `cat_blog` values (:category, :blog)");
		$st->bindParam(':category', $this->category);
		$st->bindParam(':blog', $lastId);
		$st->execute();
	}
}
