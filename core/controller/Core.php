<?php


// 20 de diciembre del 2022
// Core.php
// @brief obtiene las configuraciones, muestra y carga los contenidos necesarios.

class Core {

	public static $debug_sql = false;
	public static $user = null;

	public static function includeCSS(){
		$path = "res/css/";
		$handle=opendir($path);
		if($handle){
			while (false !== ($entry = readdir($handle)))  {
				if($entry!="." && $entry!=".."){
					$fullpath = $path.$entry;
				if(!is_dir($fullpath)){
						echo "<link rel='stylesheet' type='text/css' href='".$fullpath."' />";

					}
				}
			}
		closedir($handle);
		}

	}

	public static function redir($url){
		echo "<script>window.location='".$url."';</script>";
	}

	public static function alert($txt){
		echo "<script>alert('".$txt."');</script>";
	}

	public static function includeJS(){
		$path = "res/js/";
		$handle=opendir($path);
		if($handle){
			while (false !== ($entry = readdir($handle)))  {
				if($entry!="." && $entry!=".."){
					$fullpath = $path.$entry;
				if(!is_dir($fullpath)){
						echo "<script type='text/javascript' src='".$fullpath."'></script>";

					}
				}
			}
		closedir($handle);
		}

	}

}



?>