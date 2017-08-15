<html>
<head>
	<title>segitiga sama kaki</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$alas = $_POST['alas'];
		$tinggi = $_POST['tinggi'];
		
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'keliling':
				$hasil = $alas + ($tinggi * 2);
			break;
			case 'luas':
				$hasil = ($alas * $tinggi)/2;
			break;			
		}
	}
	?>
	<div class="segitiga">
		<h2 class="judul">Segitiga sama kaki</h2>
		
		<form method="post" action="segitiga.php">			
			<input type="text" name="alas" class="bil" autocomplete="off" placeholder="nilai alas...">
			<input type="text" name="tinggi" class="bil" autocomplete="off" placeholder="nilai tinggi...">
			<select class="opt" name="operasi">
				<option value="keliling">keliling</option>
				<option value="luas">luas</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ 
		        echo "<input type='text' value=\"$hasil\" class='bil'>";
	     }else{
		        echo "<input type='text' value='0' class='bil'>";
		  } 
		?>			
	</div>
</body>
</html>