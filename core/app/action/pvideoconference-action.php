<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="add"){

	$per = new PVideoconferenceData();
	$per->date = $_POST["date"];
	$per->videoroom = $_POST["videoroom"];
	$per->requested = $_POST["requested"];
	$per->directs = $_POST["directs"];
	$per->start_time = $_POST["start_time"];
    $per->finish_time = $_POST["finish_time"];
	$per->add();
	Core::redir("./?view=pvideoconference&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="update"){

	$per = PVideoconferenceData::getById($_POST["_id"]);
	$per->date = $_POST["date"];
	$per->videoroom = $_POST["videoroom"];
	$per->requested = $_POST["requested"];
	$per->directs = $_POST["directs"];
	$per->start_time = $_POST["start_time"];
    $per->finish_time = $_POST["finish_time"];
	$per->update();
	Core::redir("./?view=pvideoconference&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
	$per = PVideoconferenceData::getById($_GET["id"]);
	$per->del();
	Core::redir("./?view=pvideoconference&opt=all");

}
?>