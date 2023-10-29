<?php
class ConfigurationData {
	public static $tablename = "configuration";


	public function __construct(){
		$this->title = "";
		$this->content = "";
		$this->image = "";
		$this->user_id = "";
		$this->is_public = "0";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (name,preffix) ";
		$sql .= "value (\"$this->name\",\"$this->preffix\")";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto ConfigurationData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\",preffix=\"$this->preffix\",is_active=\"$this->is_active\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function updateValFromPreffix($name,$val){
		$sql = "update ".self::$tablename." set val=\"$val\" where preffix=\"$name\"";		
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ConfigurationData());
	}

	public static function getByPreffix($id){
		$sql = "select * from ".self::$tablename." where preffix=\"$id\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ConfigurationData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ConfigurationData());
	}

	public static function getPublics(){
		$sql = "select * from ".self::$tablename." where is_active=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ConfigurationData());
	}

}

?>