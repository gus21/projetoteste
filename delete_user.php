<?php
session_start();
require_once 'conexao.php';
$id = $_GET['id'];
$flag = $_GET['flag'];

$sql = "DELETE FROM users WHERE usr_id = '$id'";
$stmt = $pdo->prepare($sql);
if($stmt->execute()) {
	$_SESSION['deleted'] = true;
	if($flag=='admin'){
		header('location: list_users.php');
	}
	header('location: sair.php');
} else {
	$_SESSION['error_delete'] = false;
	if($flag=='admin'){
		header('location: list_users.php');
	}
	header('location: user.php');
}
?>