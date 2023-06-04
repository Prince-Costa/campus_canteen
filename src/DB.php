<?php
namespace BITM\SEIP12;

use PDO;

include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
class DB{
	public static $pdo_conn;
	public static function  db_connection(){
		$database_username = 'root';
		$database_password = '';
		$pdo_conn = new PDO( 'mysql:host=localhost;dbname=testcrud', $database_username, $database_password );
		return $pdo_conn;
    }
}
?>