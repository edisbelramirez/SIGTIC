<?php
class ComputerData {
	public static $tablename = "computer";

	public function __construct(){
		$this->fullname = "";
		$this->user = "";
		$this->ipaddress = "";
		$this->macddress = "";
		$this->department = "";
                $this->equipment = "";
                $this->created_at = "NOW()";
		
	}

public function add(){
		$sql = "insert into ".self::$tablename." (fullname,user,ipaddress,macddress,department,equipment,created_at) ";
		$sql .= "value (\"$this->fullname\",\"$this->user\",\"$this->ipaddress\",\"$this->macddress\",\"$this->department\",\"$this->equipment\",$this->created_at)";
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
		$sql = "update ".self::$tablename." set fullname=\"$this->fullname\",user=\"$this->user\",ipaddress=\"$this->ipaddress\",macddress=\"$this->macddress\",department=\"$this->department\",equipment=\"$this->equipment\" where id=$this->id";
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
		return Model::one($query[0],new ComputerData());
	}

	public static function getBy($k,$v){
		$sql = "select * from ".self::$tablename." where $k=\"$v\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ComputerData());
	}
        
       public static function getByDate($date){
		$sql = "select count(*) as cnt from ".self::$tablename." where date(created_at)= \"$date\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ComputerData());
	}


	
	public static function getAll(){
		 $sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ComputerData());
	}

	public static function getAllBy($k,$v){
		 $sql = "select * from ".self::$tablename." where $k=\"$v\"";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ComputerData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ComputerData());
	}


}

?>