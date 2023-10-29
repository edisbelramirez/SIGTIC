<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="add"){

	$per = new CategoryData();
	$per->name = $_POST["name"];
	$per->add();
	Core::redir("./?view=categories&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="update"){

	$per = CategoryData::getById($_POST["_id"]);
	$per->name = $_POST["name"];
	$per->update();
	Core::redir("./?view=categories&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
	$per = CategoryData::getById($_GET["id"]);
	$per->del();
	Core::redir("./?view=categories&opt=all");

}
?>