<?php 
	require_once 'core/init.php';

	require_once 'view/header.php';

	if (isset($_SESSION['nama']) == 0) {
    header('location:login.php');
	}
	$id = $_SESSION['id'];
	$sql = "SELECT SUM(jumlah) AS total FROM tb_kasmasuk WHERE pengguna_id=:id"; 
	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":id", $id);
	$stmt->execute();
	$result = $stmt->fetch();
 ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <a href="gantipass.php?id=<?= $_SESSION['id']; ?>" class="btn btn-primary btn-sm">Ganti password</a>
  </div>
  	<div class="container">
  		<div class="row">
  			<div class="col-sm-12">
  				<img src="assets/img/headersipuas.jpg" alt="">
  			</div>
  		</div>
  		<div class="row justify-content-center ">
			<div class="col-lg-5">
				<h4>Selamat datang <?= $_SESSION['nama']; ?></h4>
			</div>
		</div>
		<div class="alert alert-light text-center text-dark" role="alert">
	     	<p>Total uang kas anda Rp.<?= $result['total'] ?>,-</p>
	  	</div>
  	</div>
</main>
<?php 
	require_once 'view/footer.php';
 ?>		
		  