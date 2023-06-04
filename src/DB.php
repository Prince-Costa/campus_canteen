<?php

namespace BITM\SEIP12;

class DB{
    function db_connection(){
	$database_username = 'root';
	$database_password = 'momslove@ndmealso';
	$pdo_conn = new PDO( 'mysql:host=localhost;dbname=testpdo', $database_username, $database_password );
    }
}
?>