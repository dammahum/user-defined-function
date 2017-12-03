<?php
	$_POST=['censor_name'];
	
	$nama="Bilal";
	$sensor="***";	
	
	if($nama == "Bilal"){
		echo "Hello " . $sub_nama= substr($nama,0,-3);
		echo $sensor . "!";
	} elseif($nama == "Farid"){
		echo "Hello " . $sub_nama= substr($nama,0,-3);
		echo $sensor . "!";
	} elseif($nama == "Yahya"){
		echo "Hello " . $sub_nama= substr($nama,0,-3);
		echo $sensor . "!";
	}else {
		echo "Hello " . $nama . "!";
	}		
?>

<br>
<br>

<?php
	$_POST=['birthday'];
	
	$birthday = "1990-05-22";
	
	// Convert Ke Date Time
	$biday = new DateTime($birthday);
	$today = new DateTime();
	
	$diff = $today->diff($biday);
	
	// Display
	echo "Tanggal Lahir: ". date('d M Y', strtotime($birthday)) .'<br />';
	echo "Umur Anda ". $diff->y ." Tahun " . $diff->m . " Bulan";	
?>
