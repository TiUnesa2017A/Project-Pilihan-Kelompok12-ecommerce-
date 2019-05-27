<!DOCTYPE html>
<html lang="en">
<head>
	 <title> Daftar Barang </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<br>
	<div class="container">
		<div class="card">
			<div class="card-header bg-primary text-white">Form Cetak</div>
				<div class="card-body">	
				<?php 
	$kode = $_POST['kodebrg'];
	$nama = $_POST['namabrg'];
	$jumlah = $_POST['jumlahbrg'];
	$harga = $_POST['harga'];
	$hartot=($jumlah*$harga); 
	?>
</head>
<body style="background-color: #d1d1d1;">
<div style="align: center; margin: 50px; background-color: #ffffff; padding-bottom: 30px; border: 2px solid grey; border-radius: 0px;">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-3"><br>
			<h5>Kode Barang</h5>
			<h5>Nama Barang</h5>
			<h5>Jumlah Barang</h5>
			<h5>Harga Satuan</h5>
			<h5>Total</h5>
		</div>
		<div class="col-sm-8">
			<?php echo'<br>
			<h5>: '.$kode.'</h5>
			<h5>: '.$nama.'</h5>
			<h5>: '.$jumlah.'</h5>
			<h5>: Rp. '.$harga.',00</h5>
			<h5>: Rp. '.$hartot.',00</h5>';
			?>
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>

	  <a href="TA.html"><button type="submit" class="btn btn-warning"><b>BACK</button></a>
</body>
</html>