<?php 
	require_once 'core/init.php';

	$id = $_GET['id'];
	$sql = "DELETE FROM tb_jurusan WHERE id=:id";
	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":id", $id);
	$stmt->execute();
	header('location:jurusan.php');
 ?>