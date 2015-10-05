<?php
abstract class ActiveRecord {
	public static function getAll () {
		$table = static::$table;
		$res = array();	
		$db = DB::getInstance();
		$st = $db->prepare("SELECT * FROM ".$table);
		$st->setFetchMode(PDO::FETCH_CLASS, get_called_class());
		$st->execute();
		while ($rw = $st->fetch(PDO::FETCH_CLASS)) {
			$res[] = $rw;
		}
		return $res;
	}

	public static function getByID($id){
		$table = static::$table;
		$key = static::$key;
		$db = DB::getInstance();
		$st = $db->prepare("SELECT * FROM " . $table . " WHERE ".$key." = " . $id);
		$st->setFetchMode(PDO::FETCH_CLASS, get_called_class());
		$st->execute();
		$res = $st->fetch();
		return $res;
	}

	public function update(){
		$table = static::$table;
		$key = static::$key;
		$db = DB::getInstance();
		$query = "UPDATE ".$table." SET ";
		foreach ($this as $k => $v) {
			if ($k == $key) {
				continue;
			} else {
				$query.="$k = :{$k},";
			}
		}
		$query=rtrim($query,",");
		$query.=" WHERE ". $key."= :$key;";
		$st = $db->prepare($query);
		$st->execute(get_object_vars($this));
	}

	public function insert(){
		$table = static::$table;
		$db = DB::getInstance();
		$info = get_object_vars($this);
		$query = "INSERT INTO ".$table." (`". implode("`,`", array_keys($info)). "`) VALUES (:".implode(",:", array_keys($info)).");";
		$st = $db->prepare($query); 
		$st->execute($info);
	}
}