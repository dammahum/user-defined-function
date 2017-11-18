<?php
function familyName($fam){
	echo "Fam $fam <br />";
}

familyName("Bapak Budi");
familyName("Ibu Budi");
familyName("Budi");
familyName("Adik Budi");

echo "<br />";

// =============================< Batas!

$name= "Muhammad";

function hello($name) {
	if($name == "Muhammad"){
		echo "Hello Muhammad";
	} else {
		echo "Hello Sir";
	}
 }
 
hello($name);

echo "<br />";

// =============================< Batas!

function loop($x){
	for($i=0; $i <= 5; $i++){
		echo $x;
	}
}

$y = "<br /> loop";
loop($y);

echo "<br /><br />";

// =============================< Batas!

function add($num1, $num2){
	echo $x = $num1 + $num2;
	return $x;
}

add(10, 10);

echo "<br /><br />";

// =============================< Batas!

function laptop($brand, $price= 699000){
	echo "Laptop " . $brand," dibandrol dengan harga " . $price . "<br />";
}

laptop("Asus", 59000000);
laptop("Mac", 16000000);
laptop("Acer");

?>