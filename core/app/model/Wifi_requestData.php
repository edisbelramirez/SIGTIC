<?php
class Wifi_requestData {
	public static $tablename = "wifi_request";

	public function __construct(){
		$this->fullname = "";
		$this->ipaddress = "";
		$this->macaddress = "";
		$this->imei = "";
		$this->number = "";
        $this->equipment = "";
		$this->model = "";
        $this->created_at = "NOW()";
		
	}

public function add(){
		$sql = "insert into ".self::$tablename." (fullname,ipaddress,macaddress,imei,number,equipment,model,created_at) ";
		$sql .= "value (\"$this->fullname\",\"$this->ipaddress\",\"$this->macaddress\",\"$this->imei\",\"$this->number\",\"$this->equipment\",\"$this->model\",$this->created_at)";
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
		$sql = "update ".self::$tablename." set fullname=\"$this->fullname\",ipaddress=\"$this->ipaddress\",macaddress=\"$this->macaddress\",imei=\"$this->imei\",number=\"$this->number\",equipment=\"$this->equipment\",model=\"$this->model\" where id=$this->id";
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
		return Model::one($query[0],new Wifi_requestData());
	}

	public static function getBy($k,$v){
		$sql = "select * from ".self::$tablename." where $k=\"$v\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new Wifi_requestData());
	}
        
       public static function getByDate($date){
		$sql = "select count(*) as cnt from ".self::$tablename." where date(created_at)= \"$date\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new Wifi_requestData());
	}


	
	public static function getAll(){
		 $sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new Wifi_requestData());
	}

	public static function getAllBy($k,$v){
		 $sql = "select * from ".self::$tablename." where $k=\"$v\"";
		$query = Executor::doit($sql);
		return Model::many($query[0],new Wifi_requestData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new Wifi_requestData());
	}


}

?>