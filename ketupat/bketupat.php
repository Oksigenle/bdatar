<!DOCTYPE html>
<html>
<head>
	<title>bela katupat</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php
 if (isset($_POST['hitung'])) {
 	$alas =     $_POST['alas'];
 	$tinggi = $_POST['tinggi'];
 	$operasi =  $_POST['operasi'];

 	switch ($operasi) {
 		case 'keliling':
 			$hasil = 2 * ($alas + $tinggi);
 			break;
 		
 		case 'luas':
 			$hasil = $alas * $tinggi;
 			break;
 	}
 }
?>
	<div class="ketupat">
		<h2 class="judul">Belaketupat</h2>
		  
		<form method="post" action="">			
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
				echo "<input type='text' value='hasil..' class='bil'>";
			} 
		?>			
	</div>
</body>
</html>