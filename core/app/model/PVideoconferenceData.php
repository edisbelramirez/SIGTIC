<?php
class PVideoconferenceData {
	public static $tablename = "pvideoconference";

	public function __construct(){
		$this->date = "";
		$this->videoroom = "";
        $this->requested = "";
		$this->directs = "";
		$this->start_time = "";
		$this->finish_time = "";
        $this->created_at = "NOW()";
		
	}

public function add(){
		$sql = "insert into ".self::$tablename." (date,videoroom,requested,directs,start_time,finish_time,created_at) ";
		$sql .= "value (\"$this->date\",\"$this->videoroom\",\"$this->requested\",\"$this->directs\",\"$this->start_time\",\"$this->finish_time\",$this->created_at)";
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
		$sql = "update ".self::$tablename." set date=\"$this->date\",videoroom=\"$this->videoroom\",requested=\"$this->requested\",directs=\"$this->directs\",start_time=\"$this->start_time\",finish_time=\"$this->finish_time\" where id=$this->id";
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
		return Model::one($query[0],new PVideoconferenceData());
	}

	public static function getBy($k,$v){
		$sql = "select * from ".self::$tablename." where $k=\"$v\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new PVideoconferenceData());
	}
        
       public static function getByDate($date){
		$sql = "select count(*) as cnt from ".self::$tablename." where date(created_at)= \"$date\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new PVideoconferenceData());
	}


	
	public static function getAll(){
		 $sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new PVideoconferenceData());
	}

	public static function getAllBy($k,$v){
		 $sql = "select * from ".self::$tablename." where $k=\"$v\"";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PVideoconferenceData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PVideoconferenceData());
	}


}

?>