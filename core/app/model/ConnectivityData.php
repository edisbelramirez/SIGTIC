<?php
class ConnectivityData {
	public static $tablename = "connectivity";

	public function __construct(){
		$this->company = "";
		$this->ed = "";
        $this->wan = "";
		$this->lan = "";
		$this->firewall = "";
		$this->domain = "";
		$this->bandwidth = "";
        $this->created_at = "NOW()";
		
	}

public function add(){
		$sql = "insert into ".self::$tablename." (company,ed,wan,lan,firewall,domain,bandwidth,created_at) ";
		$sql .= "value (\"$this->company\",\"$this->ed\",\"$this->wan\",\"$this->lan\",\"$this->firewall\",\"$this->domain\",\"$this->bandwidth\",$this->created_at)";
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
		$sql = "update ".self::$tablename." set company=\"$this->company\",ed=\"$this->ed\",wan=\"$this->wan\",lan=\"$this->lan\",firewall=\"$this->firewall\",domain=\"$this->domain\",bandwidth=\"$this->bandwidth\" where id=$this->id";
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
		return Model::one($query[0],new ConnectivityData());
	}

	public static function getBy($k,$v){
		$sql = "select * from ".self::$tablename." where $k=\"$v\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ConnectivityData());
	}
        
       public static function getByDate($date){
		$sql = "select count(*) as cnt from ".self::$tablename." where date(created_at)= \"$date\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ConnectivityData());
	}


	
	public static function getAll(){
		 $sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ConnectivityData());
	}

	public static function getAllBy($k,$v){
		 $sql = "select * from ".self::$tablename." where $k=\"$v\"";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ConnectivityData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ConnectivityData());
	}


}

?>