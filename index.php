<?php 
	require_once 'core/init.php';

	require_once 'view/header.php';

	if (isset($_SESSION['nama']) == 0) {
    header('location:login.php');
	}
 ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <a href="gantipass.php?id=<?= $_SESSION['id']; ?>" class="btn btn-primary btn-sm">Ganti password</a>
  </div>
  	<div class="container">
  		<div class="row justify-content-center ">
			<div class="col-lg-5">
				<h4>Selamat datang <?= $_SESSION['nama']; ?></h4>
			</div>
		</div>
  	</div>
</main>
<?php 
	require_once 'view/footer.php';
 ?>		
		  