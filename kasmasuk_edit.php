<?php 
	require_once 'core/init.php';;

	require_once 'view/header.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM tb_kasmasuk WHERE id = :id";
	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":id", $id);
	$stmt->execute();
	$result = $stmt->fetch();

	$sql2 = "SELECT * FROM tb_pengguna";
	$stmt2 = $koneksi->prepare($sql2);
	$stmt2->execute();

 ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
  	</div>
  	<?php 
	  	if (isset($_POST['submit'])) {
	  		$pengguna_id = $_POST['pengguna_id'];
	  		$jumlah = $_POST['jumlah'];

	  		$waktu = date("Y-m-d H:i:s");


	  		if (!empty(trim($jumlah))) {
	  			editKasmasuk($id,$pengguna_id,$waktu,$jumlah,$koneksi);
	  			header('location: kasmasuk.php');
	  		}
	  	}

  	 ?>
	<div class="col-md-8">
		<div class="card">
			<div class="card-body">
				<form method="post">
				  <div class="form-group">
				    <label>Nama Pengguna</label>
				    <select class="form-control" name="pengguna_id">
				    	<?php while ($row=$stmt2->fetch()) {  ?>
				        <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
				    	<?php } ?>
			      	</select>
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
		  