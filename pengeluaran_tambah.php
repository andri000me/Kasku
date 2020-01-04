<?php 
	require_once 'core/init.php';;

	require_once 'view/header.php';
 ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
  	</div>
  	<?php 
	  	if (isset($_POST['submit'])) {
	  		$jenis_pengeluaran = $_POST['jenis_pengeluaran'];

	  		if (!empty(trim($jenis_pengeluaran))) {
	  			tambahPengeluaran($jenis_pengeluaran,$koneksi);
	  			header('location: pengeluaran.php');
	  		}
	  	}

  	 ?>
	<div class="col-md-8">
		<div class="card">
			<div class="card-body">
				<form method="post">
				  <div class="form-group">
				    <label>Jenis Pengeluaran</label>
				    <input type="text" class="form-control" name="jenis_pengeluaran">
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
		  