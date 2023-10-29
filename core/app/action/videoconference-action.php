<?php
if(isset($_SESSION["user_id"])){
if(isset($_GET["opt"]) && $_GET["opt"]=="add"){
if(count($_POST)>0){
	$user = new VideoconferenceData();
	$user->videoroom = $_POST["videoroom"];
	$user->customer = $_POST["customer"];
	$user->groups = $_POST["groups"];
	$user->date = $_POST["date"];
	$user->start_time = $_POST["start_time"];
	$user->finish_time = $_POST["finish_time"];
	$user->price = $_POST["price"];
	$user->user_id = $_SESSION["user_id"];


	$user->add();
	Core::alert("Videoconferencia agregada!");
	Core::redir("./?view=videoconference&opt=all");
}
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="upd"){
if(count($_POST)>0){
	$user = VideoconferenceData::getById($_POST["user_id"]);


	$user->videoroom = $_POST["videoroom"];
	$user->customer = $_POST["customer"];
	$user->groups = $_POST["groups"];
	$user->date = $_POST["date"];
	$user->start_time = $_POST["start_time"];
	$user->finish_time = $_POST["finish_time"];
	$user->price = $_POST["price"];
	$user->user_id = $_SESSION["user_id"];

	$user->update();


	Core::alert("Videoconferencia actualizada!");
	Core::redir("./?view=videoconference&opt=all");
}
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
	$user = VideoconferenceData::getById($_GET["id"]);
	//if($user->id!=$_SESSION["user_id"]){
		$user->del();
//	}
	Core::alert("Videoconferencia eliminada!");
	Core::redir("./?view=videoconference&opt=all");
}
}


?>