<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="add"){

	$per = new ConnectivityData();
	$per->company = $_POST["company"];
	$per->ed = $_POST["ed"];
	$per->wan = $_POST["wan"];
	$per->lan = $_POST["lan"];
	$per->firewall = $_POST["firewall"];
    $per->domain= $_POST["domain"];
	$per->bandwidth= $_POST["bandwidth"];
	$per->add();
	Core::redir("./?view=connectivity&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="update"){

	$per = ConnectivityData::getById($_POST["_id"]);
	$per->company = $_POST["company"];
	$per->ed = $_POST["ed"];
	$per->wan = $_POST["wan"];
	$per->lan = $_POST["lan"];
	$per->firewall = $_POST["firewall"];
    $per->domain = $_POST["domain"];
	$per->bandwidth = $_POST["bandwidth"];
	$per->update();
	Core::redir("./?view=connectivity&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
	$per = ConnectivityData::getById($_GET["id"]);
	$per->del();
	Core::redir("./?view=connectivity&opt=all");

}
?>