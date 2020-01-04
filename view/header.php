<!doctype html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <title>Kasidu</title>


	    <!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<!-- Custom styles for this template -->
	    <link href="assets/css/dashboard.css" rel="stylesheet">

  	</head>
  	<body>
		<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
		  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
		  <ul class="navbar-nav px-3">
		    <li class="nav-item">
		      <a class="nav-link" href="logout.php">Keluar</a>
		    </li>
		  </ul>
		</nav>

		<div class="container-fluid">
		  <div class="row">
		    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
		      <div class="sidebar-sticky">
		        <ul class="nav flex-column">
		          <li class="nav-item">
		            <a class="nav-link active" href="index.php">
		              <i class="fas fa-home"></i> Dashboard
		            </a>
		          </li>
		          <?php 
		          if (isset($_SESSION['status']) === 'admin') { ?>
			        <li class="nav-item">
		              <a class="nav-link" href="pengguna.php">
		                <i class="fas fa-users"></i> Pengguna
		              </a>
		            </li>
		            <li class="nav-item">
			            <a class="nav-link" href="jurusan.php">
			              <i class="fas fa-university"></i> Jurusan
			            </a>
			          </li>
					<?php } ?>
		          <li class="nav-item">
		            <a class="nav-link" href="kasmasuk.php">
		              <i class="fas fa-money-bill-wave-alt"></i> Kas masuk
		            </a>
		          </li>
		          <?php 
		           if (isset($_SESSION['status']) === 'admin') { ?>
		          <li class="nav-item">
		            <a class="nav-link" href="pengeluaran.php">
		              <i class="fas fa-boxes"></i> Jenis pengeluaran
		            </a>
		          </li>
		          <?php }elseif ($_SESSION['status'] === 'bendahara') {?>
		          	<li class="nav-item">
		            <a class="nav-link" href="pengeluaran.php">
		              <i class="fas fa-boxes"></i> Jenis pengeluaran
		            </a>
		          </li>
		         <?php } ?>
		          <li class="nav-item">
		            <a class="nav-link" href="kaskeluar.php">
		              <i class="fas fa-file-invoice-dollar"></i> Kas keluar
		            </a>
		          </li>
		        </ul>
		      </div>
		    </nav>