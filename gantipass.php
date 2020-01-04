<?php 
	require_once 'core/init.php';;
	require_once 'view/header.php';

	if (isset($_SESSION['nama']) == 0) {
    header('location:login.php');
	}
 ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
  	</div>
  	<?php 
  	$id = $_GET['id'];
	  	if (isset($_POST['submit'])) {
	  		$pass = $_POST['pass'];

	  		if (!empty(trim($pass))) {
	  			gantiPass($id,$pass,$koneksi);
	  			header('location: index.php');
	  		}
	  	}

  	 ?>
	<div class="col-md-8">
		<div class="card">
			<div class="card-body">
				<form method="post">
				  <div class="form-group">
				    <label>Password baru</label>
				    <input type="text" class="form-control" name="pass">
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
		  