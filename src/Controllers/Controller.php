<?php
	namespace Controllers;
	//abstrakcyjna klasa kontrolera
	abstract class Controller {
		
		//przekierowanie na inny adres
		public static function redirect($url) {
			header('location: '.'http://'.$_SERVER["SERVER_NAME"].\Config\Database\DBConfig::$portlocal.'/'.
			\Config\Website\Config::$subdir.$url);
            exit(0);
		}
		//:8080
		//załadowanie modelu
		public function getModel($name){
			$name = 'Models\\'.$name;
			return new $name();
		}
		
		//załadowanie widoku
		public function getView($name){
			$name = 'Views\\'.$name;
			return new $name();
		}		
	}
