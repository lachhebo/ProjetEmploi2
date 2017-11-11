<?php
namespace App;

class App{

	const DB_NAME = 'espace_membre';
	const DB_USER = 'root';
	const DB_PASS = '1234azer';
	const DB_HOST = 'localhost';

	private static $database;
	private static $title = 'Projet Emploi';

	public static function getDb(){
		if(self::$database == null ){
			self::$database = new Database(self::DB_HOST, self::DB_NAME, self::DB_USER, self::DB_PASS);
			return self::$database;
		}
		return self::$database;
	}

	public static function notFound(){
		header('HTTP/1.0 404 Not Found');
		header('Loacation:index.php?p=404');
	}

	public static function getTitle(){
		return self::$title;
	}

	public static function setTitle($title){
		self::$title = 'Projet Emploi :'. $title;
	}
}
