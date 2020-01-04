<?php 
	require_once 'core/init.php';

	if (isset($_SESSION['nama']) == 0) {
    header('location:login.php');
	}
	
	$id = $_GET['id'];
	$sql = "DELETE FROM tb_kasmasuk WHERE id=:id";
	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":id", $id);
	$stmt->execute();
	header('location:kasmasuk.php');
 ?>