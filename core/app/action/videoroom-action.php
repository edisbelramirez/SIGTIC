<?php
if(isset($_SESSION["user_id"])){
if(isset($_GET["opt"]) && $_GET["opt"]=="add"){
if(count($_POST)>0){
	$user = new VideoroomData();
	$user->videoroom = $_POST["videoroom"];
	$user->code = $_POST["code"];
	$user->linkaddress = $_POST["linkaddress"];
	$user->add();
	Core::alert("Sala agregada!");
	Core::redir("./?view=videoroom&opt=all");
}
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="upd"){
if(count($_POST)>0){
	$user = VideoroomData::getById($_POST["user_id"]);
	$user->videoroom = $_POST["videoroom"];
	$user->code = $_POST["code"];
	$user->linkaddress = $_POST["linkaddress"];
	$user->update();
	Core::alert("Sala actualizada!");
	Core::redir("./?view=videoroom&opt=all");
}
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
	$user = VideoroomData::getById($_GET["id"]);
	//if($user->id!=$_SESSION["user_id"]){
		$user->del();
//	}
	Core::alert("Sala eliminada!");
	Core::redir("./?view=videoroom&opt=all");
}
}


?>