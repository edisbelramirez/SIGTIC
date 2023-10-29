<?php
class VideoconferenceData {
	public static $tablename = "videoconference";

	public function __construct(){
		$this->videoroom = "";
		$this->customer = "";
		$this->groups = "";
		$this->date = "";
		$this->start_time = "";
		$this->finish_time = "";
		$this->price = "";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into videoconference (videoroom,customer, groups, date, start_time, finish_time, price, created_at) ";
		$sql .= "value (\"$this->videoroom\",\"$this->customer\",\"$this->groups\",\"$this->date\",\"$this->start_time\",\"$this->finish_time\",$this->price, $this->created_at)";
		Executor::doit($sql);
	}

	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

	public static function delBy($k,$v){
		$sql = "delete from ".self::$tablename." where $k=\"$v\"";
		Executor::doit($sql);
	}

	public function update(){
		$sql = "update ".self::$tablename." set videoroom=\"$this->videoroom\",customer=\"$this->customer\",groups=\"$this->groups\",date=\"$this->date\",start_time=\"$this->start_time\",finish_time=\"$this->finish_time\",price=\"$this->price\" where id=$this->id";
		Executor::doit($sql);
	}

	public function update_passwd(){
		$sql = "update ".self::$tablename." set password=\"$this->password\" where id=$this->id";
		Executor::doit($sql);
	}

	public function updateById($k,$v){
		$sql = "update ".self::$tablename." set $k=\"$v\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		 $sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new VideoconferenceData());
	}

	public static function getBy($k,$v){
		$sql = "select * from ".self::$tablename." where $k=\"$v\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new VideoconferenceData());
	}

	public static function getAll(){
		 $sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new VideoconferenceData());
	}

	public static function getAllBy($k,$v){
		 $sql = "select * from ".self::$tablename." where $k=\"$v\"";
		$query = Executor::doit($sql);
		return Model::many($query[0],new VideoconferenceData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new VideoconferenceData());
	}


}

?>