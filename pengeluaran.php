<?php 
	require_once 'core/init.php';
	require_once 'view/header.php';

	if (isset($_SESSION['nama']) == 0) {
    header('location:login.php');
	}

	$sql = "SELECT * FROM tb_jenispengeluaran";
	$stmt = $koneksi->prepare($sql);
	$stmt->execute();

 ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Jenis Pengeluaran</h1>
  </div>
  	<div class="row">
        <div class="col-md-12 text-right">
        <a href="pengeluaran_tambah.php" class="btn btn-primary">Tambah Pengeluaran</a>
        </div>
    </div><br>
  	<div class="table-responsive table-striped">
	  <table class="table">
	  	<thead>
		    <tr>
		    	<th>No</th>
		    	<th>Jenis Pengeluaran</th>
		    	<th class="text-center">Aksi</th>
		    </tr>
	    </thead>
	    <?php 
	    		$no = 1;
	    		while ($row = $stmt->fetch() ) {
	    			
	    	 ?>
	    <tr>
	    	<td><?= $no; ?></td>
	    	<td><?= $row['jenis'] ?></td>
	    	<td class="text-center">
	    		<a href="pengeluaran_edit.php?id=<?= $row['id'] ?>" class="btn btn-success btn-sm"><i class="far fa-edit"></i> Edit</a>
	    		<a href="pengeluaran_hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Hapus</a>
	    	</td>
	    </tr>
	    <?php 
	    		$no++;
	    		}
	    	?>
	  </table>
	</div>
</main>
<?php 
	require_once 'view/footer.php';
 ?>		
		  