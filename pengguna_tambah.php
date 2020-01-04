<?php 
	require_once 'core/init.php';
	require_once 'view/header.php';
	
	if (isset($_SESSION['nama']) == 0) {
    header('location:login.php');
	}
 ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
  	</div>
  	<?php 

  	$sql2 = "SELECT * FROM tb_jurusan";
	$stmt2 = $koneksi->prepare($sql2);
	$stmt2->execute();

	  	if (isset($_POST['submit'])) {
	  		$jurusan_id = $_POST['jurusan_id'];
	  		$nama = $_POST['nama'];
	  		$nim = $_POST['nim'];
	  		$status = $_POST['status'];

	  		if (!empty(trim($jurusan_id)) && !empty(trim($nama)) && !empty(trim($nim)) ) {
	  			tambahPengguna($jurusan_id,$nama,$nim,$status,$koneksi);
	  			header('location: pengguna.php');
	  		}
	  	}

  	 ?>
	<div class="col-md-9">
		<div class="card">
			<div class="card-body">
				<form method="post">
				  <div class="form-group">
				  	<label>Nim</label>
					<input type="text" class="form-control" name="nim">
				  </div>
				  <div class="form-group">
				  	<label>Nama pengguna</label>
					<input type="text" class="form-control" name="nama">
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
				  <input type="submit" name="submit" class="btn btn-primary" value="Tambah">
				</form>
			</div>
		</div>
	</div>
  	
</main>
<?php 
	require_once 'view/footer.php';
 ?>		
		  