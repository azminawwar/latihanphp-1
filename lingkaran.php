<?php
//Asset Lingkaran
$jlingkaran = $_POST['jlingkaran'];
$pi = (22 / 7);
$hlingkaran = ($jlingkaran * $jlingkaran * $pi);

//luas lingkaran
echo '<h1>Hasil</h1>';
echo 'Jari-jari lingkaran   : ' . $_POST['jlingkaran'] . '<br/>';

echo 'Luas lingkaran adalah ' . $_POST['jlingkaran'] . ' dikali dengan ' . $_POST['jlingkaran'] . ' dikali dengan 3.14<br/>';
echo '<b>Maka luas lingkaran adalah ' . $hlingkaran . '</b></br>';
echo '<a href="lingkaran.html">Hitung Kembali</a>'

?>

<html>
    <head>
    </head>
    <body bgcolor="aquamarine">
    </body>    
</html>