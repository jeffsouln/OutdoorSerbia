<?php
class UploadNews {
	public $title;
	public $sub_title;
	public $content;
	public $category;

	public function __construct ($title,$sub_title,$content,$category){
		$this->title = $title;
		$this->sub_title = $sub_title;
		$this->content = $content;
		$this->category = $category;
}
	public function Upload(){
		$db = DB::getInstance();
		$st = $db->prepare("INSERT INTO `News` values (null, :title, :sub_title, :content, now(),'','')");
		$st->bindParam(':title', $this->title);
		$st->bindParam(':sub_title', $this->sub_title);
		$st->bindParam(':content', $this->content);
		$st->execute();
		$lastId = $db->lastInsertId();
		$st = $db->prepare("INSERT INTO `cat_news` values (:category, :news)");
		$st->bindParam(':category', $this->category);
		$st->bindParam(':news', $lastId);
		$st->execute();
	}
}
