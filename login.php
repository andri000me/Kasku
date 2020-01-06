<?php 
	require_once 'core/init.php';


	

 ?>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <title>Sipuas</title>


	    <!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<!-- Custom styles for this template -->
	    <link href="assets/css/dashboard.css" rel="stylesheet">

  	</head>
  	<body class="bg-login">
  		<?php 

  		if (isset($_POST['submit'])) {
            $nim = $_POST['nim'];
            $password = $_POST['password'];
            $sql_load_user = $koneksi->prepare("SELECT * FROM tb_pengguna WHERE nim = '$nim' AND password='$password'");
            $sql_load_user->execute();
            $data_load_user = $sql_load_user->fetchAll();
            foreach ($data_load_user as $rows_user) {
                $_SESSION['nim'] = $rows_user['nim'];
                $_SESSION['password'] = $rows_user['password'];
                $_SESSION['nama'] = $rows_user['nama'];
                $_SESSION['status'] = $rows_user['status'];
                $_SESSION['id'] = $rows_user['id'];
                header('location: index.php');
            }
        }


        ?>
  	<div class="container mt-5">
		<div class="row justify-content-center ">
			<div class="col-lg-5">
				<div class="card">
					<div class="card-body">
						<h2 class="text-center">Login</h2>
						<hr>
						<form action="" method="post">
						  <div class="form-group">
						    <input type="text" class="form-control" placeholder="Nim pengguna" name="nim">
						  </div>
						  <div class="form-group">
						    <input type="password" class="form-control" name="password" placeholder="Password pengguna">
						  </div>
						  <button type="submit" class="btn btn-primary" name="submit">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
  	</body>
  	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      	<script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
      	<script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="assets/js/dashboard.js"></script>
        <script src="https://kit.fontawesome.com/2bd31fcfdb.js" crossorigin="anonymous"></script>

    </body>
</html>