<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="add"){

	$per = new ComputerData();
	$per->fullname = $_POST["fullname"];
	$per->user = $_POST["user"];
	$per->ipaddress = $_POST["ipaddress"];
	$per->macddress = $_POST["macddress"];
	$per->department = $_POST["department"];
        $per->equipment = $_POST["equipment"];
	$per->add();
	Core::redir("./?view=computer&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="update"){

	$per = ComputerData::getById($_POST["_id"]);
	$per->fullname = $_POST["fullname"];
	$per->user = $_POST["user"];
	$per->ipaddress = $_POST["ipaddress"];
	$per->macddress = $_POST["macddress"];
	$per->department = $_POST["department"];
        $per->equipment = $_POST["equipment"];
	$per->update();
	Core::redir("./?view=computer&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
	$per = ComputerData::getById($_GET["id"]);
	$per->del();
	Core::redir("./?view=computer&opt=all");

}
?>