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
		if (isset($_POST['barang'])) {
			$barang = $_POST['barang'];
		}
		switch ($barang) {
			case 1:
				$kdbrg="BK01";$nmbrg="LAP DHCP";$hrgbrg=280000;
				break;
			case 2:
				$kdbrg="BK02";$nmbrg="LAP ROUTING";$hrgbrg=210000;
				break;
			case 3:
				$kdbrg="BK03";$nmbrg="LAP DNS";$hrgbrg=280000;
				break;
			case 4:
				$kdbrg="BK04";$nmbrg="PENGANTAR MANAJEMEN PKM";$hrgbrg=280000;
				break;
			case 5:
				$kdbrg="BK05";$nmbrg="PENGANTAR MANAJEMEN SDM";$hrgbrg=210000;
				break;
			case 6:
				$kdbrg="BK06";$nmbrg="PENGANTAR MANAJEMEN OPERASIONAL";$hrgbrg=280000;
				break;
			case 7:
				$kdbrg="BK07";$nmbrg="MIPA PEDOMAN PENULISAN SKRIPSI";$hrgbrg=280000;
				break;
			case 8:
				$kdbrg="BK08";$nmbrg="MIPA TABEL PERIODIK";$hrgbrg=210000;
				break;
			case 9:
				$kdbrg="BK09";$nmbrg="MIPA KEGUNAAN MATDIS PADA TI";$hrgbrg=280000;
				break;
			case 10:
				$kdbrg="BK10";$nmbrg="FK IND BEBAS KARIES";$hrgbrg=280000;
				break;
			case 11:
				$kdbrg="BK11";$nmbrg="FK UJI DARAH";$hrgbrg=210000;
				break;
			case 12:
				$kdbrg="BK12";$nmbrg="FK GIGI";$hrgbrg=280000;
				break;
			case 13:
				$kdbrg="BK13";$nmbrg="FIP PERAN GURU DALAM PENDIDIKAN";$hrgbrg=280000;
				break;
			case 14:
				$kdbrg="BK14";$nmbrg="FIP PROFESIONALISME GURU";$hrgbrg=210000;
				break;
			case 15:
				$kdbrg="BK15";$nmbrg="FIP PERAN DAN FUNGSI MASJID";$hrgbrg=280000;
				break;
			case 16:
				$kdbrg="BK16";$nmbrg="FIO SATU";$hrgbrg=280000;
				break;
			case 17:
				$kdbrg="BK17";$nmbrg="FIO DUA";$hrgbrg=210000;
				break;
			case 18:
				$kdbrg="BK18";$nmbrg="FIO TIGA";$hrgbrg=280000;
				break;
			default:
				break;
		}
	?>

<div class="row" style="margin: 10px 0px 10px; ">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
  	<form action="formcetak.php" method="post">
	  <?php echo 
	  '<div class="form-group">
	    <label for="kdbrg">Kode Barang</label>
	    <input type="text" class="form-control" id="kdbrg" readonly value="'.$kdbrg.'" name="kodebrg">
	  </div>
	  <div class="form-group">
	    <label for="nmbrg">Nama Barang</label>
	    <input type="text" class="form-control" id="nmbrg" readonly value="'.$nmbrg.'" name="namabrg">
	  </div>'
	  ; ?>
	  <div class="form-group was-validated">
	    <label for="jmlbrg">Jumlah Barang</label>
	    <input type="number" class="form-control" name="jumlahbrg" value="1" min="1" max="150" required>
      	<div class="invalid-feedback">Invalid</div>
	  </div>
	  <?php 
	  echo '
	  <div class="form-group">
		<label for="hrg">Harga</label>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
		      <span class="input-group-text">Rp. </span>
		    </div>
		    <input type="text" class="form-control" id="hrg" readonly value="'.$hrgbrg.'" name="harga">	
		</div>
	  </div>';
	   ?>
		<br>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
  </div>
  <div class="col-sm-2"></div>
</div>

</body>
</html>