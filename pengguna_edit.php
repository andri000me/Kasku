<?php 
	require_once 'core/init.php';;

	require_once 'view/header.php';
	date_default_timezone_set('Asia/Jakarta');

	$id = $_GET['id'];
	$sql = "SELECT * FROM tb_pengguna WHERE id = :id";
	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":id", $id);
	$stmt->execute();
	$result = $stmt->fetch();

	$sql2 = "SELECT * FROM tb_jurusan";
	$stmt2 = $koneksi->prepare($sql2);
	$stmt2->execute();

 ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
  	</div>
  	<?php 
	  	if (isset($_POST['submit'])) {
	  		$jurusan_id = $_POST['jurusan_id'];
	  		$nama = $_POST['nama'];
	  		$nim = $_POST['nim'];
	  		$status = $_POST['status'];


	  		if (!empty(trim($nama))) {
	  			editPengguna($id,$jurusan_id,$nama,$nim,$status,$koneksi);
	  			header('location: pengguna.php');
	  		}
	  	}

  	 ?>
	<div class="col-md-8">
		<div class="card">
			<div class="card-body">
				<form method="post">
				  <div class="form-group">
				    <label>Nim</label>
				    <input type="text" class="form-control" name="nim" value="<?= $result['nim'] ?>">
				  </div>
				  <div class="form-group">
				    <label>Nama Pengguna</label>
				    <input type="text" class="form-control" name="nama" value="<?= $result['nama'] ?>">
				  </div>
				  <div class="form-group">
				    <label>Nama Jurusan</label>
				    <select class="form-control" name="jurusan_id">
				    	<?php while ($row=$stmt2->fetch()) {  ?>
				        <option value="<?= $row['id'] ?>"><?= $row['namajurusan'] ?></option>
				    	<?php } ?>
			      	</select>
				  </div>
				  <div class="form-group">
				  	<label>Status pengguna</label>
					<select class="form-control" name="status">
						<option value="anggota">Anggota</option>
						<option value="bendahara">Bendahara</option>
						<option value="admin">Admin</option>
					</select>
				  </div>
				  <input type="submit" name="submit" class="btn btn-primary" value="Edit">
				</form>
			</div>
		</div>
	</div>
  	
</main>
<?php 
	require_once 'view/footer.php';
 ?>		
		  