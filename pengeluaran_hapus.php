<?php 
	require_once 'core/init.php';

	$id = $_GET['id'];
	$sql = "DELETE FROM tb_jenispengeluaran WHERE id=:id";
	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":id", $id);
	$stmt->execute();
	header('location:pengeluaran.php');
 ?>