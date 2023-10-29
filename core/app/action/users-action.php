<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="add"){

	$per = new UserData();
	$per->name = $_POST["name"];
	$per->lastname = $_POST["lastname"];
	$per->username = $_POST["username"];
	$per->password = sha1(md5($_POST["password"]));
	$per->email = $_POST["email"];
	$per->add();
	Core::redir("./?view=users&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="update"){

	$per = UserData::getById($_POST["_id"]);
	$per->name = $_POST["name"];
	$per->lastname = $_POST["lastname"];
	$per->username = $_POST["username"];
	$per->email = $_POST["email"];
	$per->update();

	if($_POST["password"]!=""){
	$per->password = sha1(md5($_POST["password"]));
		$per->update_passwd();
		Core::alert("Password Actualizado!");
	}


	Core::redir("./?view=users&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
	$per = UserData::getById($_GET["id"]);
	$per->del();
	Core::redir("./?view=users&opt=all");

}
?>