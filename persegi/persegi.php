<html>
<head>
	<title>persegi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 
	if(isset($_POST['hitung'])){
		$sisi1 = $_POST['sisi1'];
		//$sisi2 = $_POST['sisi2'];
		//$sisi3 = $_POST ['sisi3'];
		$operasi = $_POST['operasi'];

		switch ($operasi) {
			case 'keliling':
				$hasil = ($sisi1 + $sisi1 + $sisi1);
			break;
			case 'luas':
			    $hasil = ($sisi1 * $sisi1);			
		}
	}
	?>

	<div class="persegi">
		<h2 class="judul">Persegi</h2>
		<a class="brand"></a>
		<form method="post" action="persegi.php">	
			<input type="text" name="sisi1" class="bil" autocomplete="off" placeholder="sisi...">
			<!--<input type="text" name="sisi2" class="bil" autocomplete="off" placeholder="sisi...">
			<input type="text" name="sisi3" class="bil" autocomplete="off" placeholder="sisi..">-->
			<select class="opt" name="operasi">
				<option value="keliling">keliling</option>
				<option value="luas">luas</option>
			</select>

			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){
			echo "<input type='text' value=\"$hasil\" class='bil'>";
		  }else{
			echo "<input type='text' value='hasil...' class='bil'>";
		  } 
		?>	
		
	
	</div>
</body>
</html>