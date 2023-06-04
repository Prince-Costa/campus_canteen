<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
use BITM\SEIP12\DB;


if (array_key_exists('add_record', $_POST) && $_POST["add_record"] == "Save") {
	$sql = "INSERT INTO user_details ( username, first_name, last_name, gender, password, status ) VALUES ( :username, :first_name, :last_name, :gender, :password, :status )";
	$pdo_statement = DB::db_connection()->prepare($sql);
	$result = $pdo_statement->execute(array(':username' => $_POST['username'], ':first_name' => $_POST['first_name'], ':last_name' => $_POST['last_name'], ':gender' => $_POST['gender'], ':password' => $_POST['password'], ':status' => 1));
	if (!empty($result)) {
		header('location:users.php');
		set_session('success', 'User Created Successfully');
	}
} elseif (array_key_exists('edit_record', $_POST) && $_POST["edit_record"] == "Edit") {
	$pdo_statement = DB::db_connection()->prepare("update user_details set username='" . $_POST['username'] . "', first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', gender='" . $_POST['gender'] . "' where id=" . $_POST["id"]);
	$result = $pdo_statement->execute();

	$pdo_statement = DB::db_connection()->prepare("SELECT * FROM user_details where id=" . $_POST["id"]);
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();

	if ($result) {
		header('location:users.php');
		set_session('success', 'User Edited Successfully');
	}
} elseif (array_key_exists('delete_record', $_POST) && $_POST["delete_record"] == "Delete") {
	$pdo_statement = DB::db_connection()->prepare("delete from user_details where id=" . $_POST['id']);
	$pdo_statement->execute();
	header('location:users.php');
	set_session('success', 'User Deleted Successfully');
}