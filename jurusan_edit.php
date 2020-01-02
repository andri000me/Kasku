<?php 
	require_once 'core/init.php';;

	require_once 'view/header.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM tb_jurusan WHERE id = :id";
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
	  		$namajurusan = $_POST['nama_jurusan'];

	  		if (!empty(trim($namajurusan))) {
	  			editJurusan($id,$namajurusan,$koneksi);
	  			header('location: jurusan.php');
	  		}
	  	}

  	 ?>
	<div class="col-md-8">
		<div class="card">
			<div class="card-body">
				<form method="post">
				  <div class="form-group">
				    <label>Nama Jurusan</label>
				    <input type="text" class="form-control" name="nama_jurusan" value="<?= $result['namajurusan'] ?>">
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
		  