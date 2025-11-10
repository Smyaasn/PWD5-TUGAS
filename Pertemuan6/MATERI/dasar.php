<?php
$a = 10;
$b = 5;

// <!-- penjumlahan -->
$hasil = $a + $b;
echo "$a + $b : $hasil <br>";
// <!-- pengurangan -->
 $hasil = $a - $b;
 echo "$a - $b : $hasil <br>";
//<!-- pembagian -->
 $hasil = $a / $b;
 echo "$a / $b : $hasil <br>";
//<!-- perkalian -->
 $hasil = $a * $b;
 echo "$a * $b : $hasil <br>";
//<!-- modulus -->
 $hasil = $a % $b;
 echo "$a % $b : $hasil <br>";
?>

<br> 
<br>

<?php
$nilai = 70;

if ($nilai>= 80) {
    echo "Anda Lulus";
} else if ($nilai >= 70 && $nilai <= 80) {
    echo "Remedial";
}
 else {
    echo "Anda Tidak Lulus";
}

?>


<br>
<br>

<?php 
$makanan =1;

switch ($makanan) {
    case 1 : 
        echo " Menu Hari Ini Seblak";
        break;
    case 2 :
        echo " Menu Hari Ini Naspad";
        break;
    case 3 :
        echo " Menu Hari Ini Kelapa";
        break;
    default :
    echo "Makanan Tidak Tersedia";
}
?>
<br> 
<br>

<?php
echo "INI FOR <br>";
for($angka = 1; $angka <= 10; $angka++){
    echo "$angka <br>";
}
?>

<br>
<br>

<?php
echo "INI WHILE <br>";
$i = 1;
while ($i <= 5) {
    echo "$i <br> ";
    $i++;
}
?>

<br>
 
<?php
echo "INI DO WHILE <br>";
$a = 5;

do {
    echo "$a <br>";
    $a--;
} while ($a >= 1);

