<!DOCTYPE html>
<html>
<head>
	<title>lingkaran</title>
</head>
<body>
   <?php 
     if (isset($_POST["hitung"])) {
     	$diameter = $_POST["diameter"];
     	$operasi = $_POST["operasi"];
      // echo "string";
     	  switch ($operasi) {
     	  	case "keliling":
     	  		$hasil = 2*22/7*$diameter;
     	  	break;
     	  	case "luas":
     	  		$hasil = 22/7*$diameter*$diameter;
     	  	break;
     	  	
     	  }
    
           }
   ?>
   <div class='lingkaran'>
   	  <h2 class="judul">Lingkarang</h2> 
   	<form method="POST" action="">
   	  <input type='text' name='diameter' class="bil" autocomplete='off' placeholder='diameter'>	
   	  	 <select class='opt' name='operasi'>
   	  	   <option value='keliling'>keliling</option>
   	  	   <option value='luas'>luas</option>
   	  	 </select>
   	  <input type='submit' name="hitung" value='hitung' class='tombol'>
   	</form>
   	  <?php 
   	    if (isset($_POST["hitung"])) {
   	    	 echo "<input type='text' value=\"$hasil\" class='bil'>";
   	    }else{
   	    	 echo "<input type='text' value='hasil...' class='bil'>";
   	    }
   	  ?>
   </div>
</body>
</html>