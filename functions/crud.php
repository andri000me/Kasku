<?php 
function tambahJurusan($namajurusan,$koneksi){
	$sql = "INSERT INTO tb_jurusan VALUES('',:namajurusan)";
	$stmt =$koneksi->prepare($sql);
	$stmt->bindParam(":namajurusan",$namajurusan); 
	$stmt->execute();
}

function editJurusan($id,$namajurusan,$koneksi){
	$sql = "UPDATE tb_jurusan SET namajurusan =:namajurusan WHERE id = :id";
	$stmt =$koneksi->prepare($sql);
	$stmt->bindParam(":namajurusan",$namajurusan); 
	$stmt->bindParam(":id",$id); 
	$stmt->execute();
}

function tambahPengguna($jurusan_id,$nama,$nim,$koneksi){
	$sql = "INSERT INTO tb_pengguna VALUES('',:jurusan_id,:nama,:nim,'')";
	$stmt =$koneksi->prepare($sql);
	$stmt->bindParam(":jurusan_id",$jurusan_id); 
	$stmt->bindParam(":nama",$nama); 
	$stmt->bindParam(":nim",$nim); 
	$stmt->execute();
}

function editPengguna($id,$jurusan_id,$nama,$nim,$koneksi){
	$sql = "UPDATE tb_pengguna SET jurusan_id =:jurusan_id, nama =:nama, nim =:nim,password = '' WHERE id = :id";
	$stmt =$koneksi->prepare($sql);
	$stmt->bindParam(":jurusan_id",$jurusan_id); 
	$stmt->bindParam(":nama",$nama); 
	$stmt->bindParam(":nim",$nim); 
	$stmt->bindParam(":id",$id); 
	$stmt->execute();
}
 ?>