<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="add"){

	$per = new Contacts_technicalData();
	$per->company = $_POST["company"];
	$per->name = $_POST["name"];
	$per->lastname = $_POST["lastname"];
	$per->address = $_POST["address"];
	$per->phone = $_POST["phone"];
	$per->email = $_POST["email"];
	$per->add();
	Core::redir("./?view=contacts_technical&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="update"){

	$per = Contacts_technicalData::getById($_POST["_id"]);
	$per->company = $_POST["company"];
	$per->name = $_POST["name"];
	$per->lastname = $_POST["lastname"];
	$per->address = $_POST["address"];
	$per->phone = $_POST["phone"];
	$per->email = $_POST["email"];
	$per->update();
	Core::redir("./?view=contacts_technical&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
	$per = Contacts_technicalData::getById($_GET["id"]);
	$per->del();
	Core::redir("./?view=contacts_technical&opt=all");

}
?>