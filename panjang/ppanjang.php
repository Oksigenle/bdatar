<html>
<head>
	<title>persegi panjang</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$p = $_POST['panjang'];
		$l = $_POST['lebar'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
	
			case 'keliling':
				$hasil = 2*($p+$l);
			break;	
			case 'luas':
				$hasil = $p * $l; 
			break;		
		}
	}
	?>
	<div class="panjang">
		<h2 class="judul">persegi panjang</h2>
	
		<form method="post" action="ppanjang.php">			
			<input type="text" name="panjang" class="bil" autocomplete="off" placeholder="Masukkan panjang">
			<input type="text" name="lebar" class="bil" autocomplete="off" placeholder="Masukkan lebar">
			<select class="opt" name="operasi">
				<option value="keliling">keliling</option>
				<option value="luas">luas</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>