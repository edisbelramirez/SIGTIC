<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="add"){

	$per = new Wifi_requestData();
	$per->fullname = $_POST["fullname"];
	$per->ipaddress = $_POST["ipaddress"];
	$per->macaddress = $_POST["macaddress"];
	$per->imei = $_POST["imei"];
	$per->number = $_POST["number"];
    $per->equipment = $_POST["equipment"];
	$per->model = $_POST["model"];
	$per->add();
	Core::redir("./?view=wifi_request&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="update"){

	$per = Wifi_requestData::getById($_POST["_id"]);
	$per->fullname = $_POST["fullname"];
	$per->ipaddress = $_POST["ipaddress"];
	$per->macaddress = $_POST["macaddress"];
	$per->imei = $_POST["imei"];
	$per->number = $_POST["number"];
	$per->equipment = $_POST["equipment"];
    $per->model = $_POST["model"];
	$per->update();
	Core::redir("./?view=wifi_request&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
	$per = Wifi_requestData::getById($_GET["id"]);
	$per->del();
	Core::redir("./?view=wifi_request&opt=all");

}
?>