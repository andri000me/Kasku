<?php 
	require_once 'core/init.php';
	require_once 'view/header.php';

	if (isset($_SESSION['nama']) == 0) {
    header('location:login.php');
	}

	$id = $_GET['id'];
	$sql = "SELECT * FROM tb_jenispengeluaran WHERE id = :id";
	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":id", $id);
	$stmt->execute();
	$result = $stmt->fetch();

 ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
  	</div>
  	<?php 
	  	if (isset($_POST['submit'])) {
	  		$jenis = $_POST['jenis'];

	  		if (!empty(trim($jenis))) {
	  			editPengeluaran($id,$jenis,$koneksi);
	  			header('location: pengeluaran.php');
	  		}
	  	}

  	 ?>
	<div class="col-md-8">
		<div class="card">
			<div class="card-body">
				<form method="post">
				  <div class="form-group">
				    <label>Nama Jurusan</label>
				    <input type="text" class="form-control" name="jenis" value="<?= $result['jenis'] ?>">
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
		  