<?php
//Asset Lingkaran
$jlingkaran = $_POST['jlingkaran'];
$pi = (22 / 7);
$satuan = $_POST['slingkaran'];
$hlingkaran = ($jlingkaran * $jlingkaran * $pi);

//luas lingkaran
echo '<h1>Hasil</h1>';
echo 'Jari-jari lingkaran   : ' . $_POST['jlingkaran'] . ' '. $satuan .'<br/>';

echo 'Luas lingkaran adalah ' . $_POST['jlingkaran'] . ' '. $satuan .' dikali dengan ' . $_POST['jlingkaran'] . ' '. $satuan .' dikali dengan pi (3.14)<br/>';
echo '<b>Maka luas lingkaran adalah </br>' . $hlingkaran . ' '. $satuan .'<sup>2</sup></b></br>';
echo '<a href="lingkaran.html">Hitung Kembali</a>'

?>

<html>
    <head>
    </head>
    <body bgcolor="aquamarine">
    </body>    
</html>