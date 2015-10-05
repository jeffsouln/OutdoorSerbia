<?php
abstract class ActiveRecordNewsBlog extends ActiveRecord {
	public static function getAllNew (){
		$table = static::$table;
		$key = static::$key;
		$singular = static::$singular;
		$res = array();
		$db = DB::getInstance();
		$st = $db->prepare("SELECT ".$table.".*,GROUP_CONCAT( name SEPARATOR ',') AS 'category' FROM `".$table."`,(SELECT * FROM `categories` LEFT JOIN `cat_".$singular."` on category_id = category) AS `cat_name_".$singular."` WHERE ".$key." = ".$singular." GROUP BY ".$key." ORDER BY time DESC ");
		$st->setFetchMode(PDO::FETCH_CLASS,get_called_class());
		$st->execute();
		while ($rw = $st->fetch(pdo::FETCH_CLASS)) {
			$rw->category = explode(',',$rw->category);
			$res[] = $rw;
		}
		return $res;
	}
	public static function getAllFavoriteNew (){
		$table = static::$table;
		$key = static::$key;
		$singular = static::$singular;
		$res = array();
		$db = DB::getInstance();
		$st = $db->prepare("SELECT ".$table.".*,GROUP_CONCAT( name SEPARATOR ',') AS 'category' FROM `".$table."`,(SELECT * FROM `categories` LEFT JOIN `cat_".$singular."` on category_id = category) AS `cat_name_".$singular."` WHERE time BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW() AND ".$key." = ".$singular." GROUP BY ".$key." ORDER BY likes DESC");
		$st->setFetchMode(PDO::FETCH_CLASS,get_called_class());
		$st->execute();
		while ($rw = $st->fetch(pdo::FETCH_CLASS)) {
			$rw->category = explode(',',$rw->category);
			$res[] = $rw;
		}
		return $res;
	}
	public static function getAllByCat ($cat){
		$table = static::$table;
		$key = static::$key;
		$singular = static::$singular;
		$res = array();
		$db = DB::getInstance();
		$st = $db->prepare("SELECT ".$table.".*,GROUP_CONCAT( name SEPARATOR ',') AS 'category' FROM `".$table."`,(SELECT * FROM `categories` LEFT JOIN `cat_".$singular."` on category_id = category) AS `cat_name_".$singular."` WHERE  ".$key." = ".$singular." AND ".$cat." = category GROUP BY ".$key." ORDER BY time DESC");
		$st->setFetchMode(PDO::FETCH_CLASS,get_called_class());
		$st->execute();
		while ($rw = $st->fetch(pdo::FETCH_CLASS)) {
			$rw->category = explode(',',$rw->category);
			$res[] = $rw;
		}
		return $res;
	}
	public static function getArticleByID($id){
		$table = static::$table;
		$key = static::$key;
		$singular = static::$singular;
		$db = DB::getInstance();
		$st = $db->prepare("SELECT ".$table.".*,GROUP_CONCAT( name SEPARATOR ',') AS 'category' FROM `".$table."`,(SELECT * FROM `categories` LEFT JOIN `cat_".$singular."` on category_id = category) AS `cat_name_".$singular."` WHERE ".$key." = ".$id." AND ".$key." = ".$singular." GROUP BY ".$key);
		$st->setFetchMode(PDO::FETCH_CLASS, get_called_class());
		$st->execute();
		$res = $st->fetch();
		$res->category = explode(',',$res->category);
		return $res;
	}
}