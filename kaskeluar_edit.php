<?php 
	require_once 'core/init.php';;

	require_once 'view/header.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM tb_kaskeluar WHERE id = :id";
	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":id", $id);
	$stmt->execute();
	$result = $stmt->fetch();

	$sql2 = "SELECT * FROM tb_jenispengeluaran";
	$stmt2 = $koneksi->prepare($sql2);
	$stmt2->execute();

 ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
  	</div>
  	<?php 
	  	if (isset($_POST['submit'])) {
	  		$jenis_id = $_POST['jenis_id'];
	  		$deskripsi = $_POST['deskripsi'];
	  		$jumlah = $_POST['jumlah'];
	  		$waktu = date("Y-m-d H:i:s");


	  		if (!empty(trim($jumlah)) && !empty(trim($deskripsi)) ) {
	  			editKaskeluar($id,$jenis_id,$deskripsi,$waktu,$jumlah,$koneksi);
	  			header('location: kaskeluar.php');
	  		}
	  	}

  	 ?>
	<div class="col-md-8">
		<div class="card">
			<div class="card-body">
				<form method="post">
				  <div class="form-group">
				    <label>Nama Pengguna</label>
				    <select class="form-control" name="jenis_id">
				    	<?php while ($row=$stmt2->fetch()) {  ?>
				        <option value="<?= $row['id'] ?>"><?= $row['jenis'] ?></option>
				    	<?php } ?>
			      	</select>
				  </div>
				  <div class="form-group">
				    <label>Keterangan</label>
				    <textarea class="form-control" name="deskripsi"><?= $result['deskripsi'] ?></textarea>
				  </div>
				  <div class="form-group">
				    <label>Jumlah</label>
				    <input type="text" class="form-control" name="jumlah" value="<?= $result['jumlah'] ?>">
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
		  