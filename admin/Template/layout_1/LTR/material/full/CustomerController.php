<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
use BITM\SEIP12\DB;
use BITM\SEIP12\Utility\Utility;
use Intervention\Image\ImageManager;


if (array_key_exists('add_record', $_POST) && $_POST["add_record"] == "Save") {
	dd($_POST);
	$sql = "INSERT INTO user_details ( username, first_name, last_name, gender, password, status ) VALUES ( :username, :first_name, :last_name, :gender, :password, :status )";
	$pdo_statement = DB::db_connection()->prepare($sql);
	$result = $pdo_statement->execute(array(':username' => $_POST['username'], ':first_name' => $_POST['first_name'], ':last_name' => $_POST['last_name'], ':gender' => $_POST['gender'], ':password' => $_POST['password'], ':status' => 1));
	
	if (!empty($result)) {
		header('location:users.php');
		set_session('success', 'User Created Successfully');
	}

}