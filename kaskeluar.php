<?php 
	require_once 'core/init.php';

	require_once 'view/header.php';

	$sql = "SELECT * FROM tb_kaskeluar";
	$stmt = $koneksi->prepare($sql);
	$stmt->execute();

 ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kas Keluar</h1>
  </div>
  	<div class="row">
        <div class="col-md-12 text-right">
        <a href="kaskeluar_tambah.php" class="btn btn-primary">Tambah Kas Keluar</a>
        </div>
    </div><br>
  	<div class="table-responsive table-striped">
	  <table class="table">
	  	<thead>
		    <tr>
		    	<th>No</th>
		    	<th>Jenis pengeluaran</th>
		    	<th>Keterangan</th>
		    	<th>Waktu</th>
		    	<th>Jumlah Yang Dikeluarkan</th>
		    	<th class="text-center">Aksi</th>
		    </tr>
	    </thead>
	    <?php 
	    		$no = 1;
	    		while ($row = $stmt->fetch() ) {
	    			
	    	 ?>
	    <tr>
	    	<td><?= $no; ?></td>
	    	<td><?= $row['jenis_id'] ?></td>
	    	<td><?= $row['deskripsi'] ?></td>
	    	<td><?= $row['waktu'] ?></td>
	    	<td><?= $row['jumlah'] ?></td>
	    	<td class="text-center">
	    		<a href="kaskeluar_edit.php?id=<?= $row['id'] ?>" class="btn btn-success btn-sm"><i class="far fa-edit"></i> Edit</a>
	    		<a href="kaskeluar_hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Hapus</a>
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
		  