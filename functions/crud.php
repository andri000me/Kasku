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

function tambahKasmasuk($pengguna_id,$waktu,$jumlah,$koneksi){
	$sql = "INSERT INTO tb_kasmasuk VALUES('',:pengguna_id,:waktu,:jumlah)";
	$stmt =$koneksi->prepare($sql);
	$stmt->bindParam(":pengguna_id",$pengguna_id); 
	$stmt->bindParam(":waktu",$waktu); 
	$stmt->bindParam(":jumlah",$jumlah); 
	$stmt->execute();
}

function editKasmasuk($id,$pengguna_id,$waktu,$jumlah,$koneksi){
	$sql = "UPDATE tb_kasmasuk SET pengguna_id =:pengguna_id, waktu =:waktu, jumlah=:jumlah WHERE id = :id";
	$stmt =$koneksi->prepare($sql);
	$stmt->bindParam(":pengguna_id",$pengguna_id); 
	$stmt->bindParam(":waktu",$waktu); 
	$stmt->bindParam(":jumlah",$jumlah); 
	$stmt->bindParam(":id",$id); 
	$stmt->execute();
}

function tambahPengeluaran($jenis,$koneksi){
	$sql = "INSERT INTO tb_jenispengeluaran VALUES('',:jenis)";
	$stmt =$koneksi->prepare($sql);
	$stmt->bindParam(":jenis",$jenis); 
	$stmt->execute();
}

function editPengeluaran($id,$jenis,$koneksi){
	$sql = "UPDATE tb_jenispengeluaran SET jenis =:jenis WHERE id = :id";
	$stmt =$koneksi->prepare($sql);
	$stmt->bindParam(":jenis",$jenis); 
	$stmt->bindParam(":id",$id); 
	$stmt->execute();
}

function tambahKaskeluar($jenis_id,$deskripsi,$waktu,$jumlah,$koneksi){
	$sql = "INSERT INTO tb_kaskeluar VALUES('',:jenis_id,:deskripsi,:waktu,:jumlah)";
	$stmt =$koneksi->prepare($sql);
	$stmt->bindParam(":jenis_id",$jenis_id); 
	$stmt->bindParam(":deskripsi",$deskripsi); 
	$stmt->bindParam(":waktu",$waktu); 
	$stmt->bindParam(":jumlah",$jumlah); 
	$stmt->execute();
}

function editKaskeluar($id,$jenis_id,$deskripsi,$waktu,$jumlah,$koneksi){
	$sql = "UPDATE tb_kaskeluar SET jenis_id =:jenis_id,deskripsi =:deskripsi, waktu =:waktu, jumlah=:jumlah WHERE id = :id";
	$stmt =$koneksi->prepare($sql);
	$stmt->bindParam(":jenis_id",$jenis_id); 
	$stmt->bindParam(":deskripsi",$deskripsi); 
	$stmt->bindParam(":waktu",$waktu); 
	$stmt->bindParam(":jumlah",$jumlah); 
	$stmt->bindParam(":id",$id); 
	$stmt->execute();
}

 ?>