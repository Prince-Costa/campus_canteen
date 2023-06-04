<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
// use BITM\SEIP12\DB;
// dd($_POST);
	$database_username = 'root';
	$database_password = 'momslove@ndmealso';
	$pdo_conn = new PDO( 'mysql:host=localhost;dbname=testpdo', $database_username, $database_password );

if(!empty($_POST["add_record"])) {
	// require_once("db.php");
    // dd($pdo_conn);
	$sql = "INSERT INTO user_details ( username, first_name, last_name, gender, password, status ) VALUES ( :username, :first_name, :last_name. :gender, :password, :status )";
	$pdo_statement = $pdo_conn->prepare( $sql );
		
	$result = $pdo_statement->execute( array( ':username'=>$_POST['username'], ':first_name'=>$_POST['first_name'], ':last_name'=>$_POST['last_name'], ':gender'=>$_POST['gender'], ':password'=>$_POST['password'], ':status'=>1 ) );
	if (!empty($result) ){
	  header('location:index.php');
	}
}