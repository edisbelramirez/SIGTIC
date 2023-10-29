<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="add"){

	$per = new User_requestData();
	$per->fullname = $_POST["fullname"];
	$per->username = $_POST["username"];
	$per->ci = $_POST["ci"];
	$per->groupusers = $_POST["groupusers"];
	$per->occupation = $_POST["occupation"];
        $per->services = $_POST["services"];
	$per->add();
	Core::redir("./?view=user_request&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="update"){

	$per = User_requestData::getById($_POST["_id"]);
	$per->fullname = $_POST["fullname"];
	$per->username = $_POST["username"];
	$per->ci = $_POST["ci"];
	$per->groupusers = $_POST["groupusers"];
	$per->occupation = $_POST["occupation"];
        $per->services = $_POST["services"];
	$per->update();
	Core::redir("./?view=user_request&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
	$per = User_requestData::getById($_GET["id"]);
	$per->del();
	Core::redir("./?view=user_request&opt=all");

}
?>