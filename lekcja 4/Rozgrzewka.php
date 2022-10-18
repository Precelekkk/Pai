<html>
<head>
</head>
<body>
</body>
</html>

<?php
$numer = array(1,2,3,4,69,43,64,34,74,88);

 // $numer = array_pop($numer);  pokazuje tylko najwyzszy ten ten 
 print_r($numer);

sort($numer);
echo "<br>";echo "<br>";
$arrlength = count($numer);
for($x = 0; $x < $arrlength; $x++) {
    echo $numer[$x];
    echo "<br>";
}

$Slowa = array("Tanjiro", "Komburo", "Zenitsu" ,"Alicja");
sort($Slowa);
echo "<br>"; echo "<br>";
$clength = count($Slowa);
for($x = 0; $x < $clength; $x++) {
    echo $Slowa[$x];
    echo "<br>";
	
	
	
}
echo "<br>"; echo "<br>";
for ($z = 1; $z <= 3; $z++) {
 echo $Slowa[$z];
 echo $numer[$z];
}
echo "<br>";echo "<br>";
echo current($numer) . "<br>";
?>

</body>
</html>