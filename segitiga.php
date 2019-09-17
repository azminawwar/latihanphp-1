<?php

//Asset Segitiga
$psegitiga = $_POST['psegitiga'];
$lsegitiga = $_POST['lsegitiga'];
$satuan = $_POST['ssegitiga'];
$hsegitiga = ($psegitiga * $lsegitiga / 2);

//luas segitiga
echo '<h1>Hasil</h1>';
echo 'Tinggi Segitiga   : ' . $_POST['psegitiga'] . ' '. $satuan .'<br/>';
echo 'Lebar Segitiga    : ' . $_POST['lsegitiga'] . ' '. $satuan .'<br/>';

echo 'Luas segitiga adalah ' . $_POST['psegitiga'] . ' '. $satuan .' dikali dengan ' . $_POST['lsegitiga'] . ' '. $satuan .' dibagi dengan 2<br/>';
echo '<b>Maka luas segitiga adalah </br>' . $hsegitiga .' '. $satuan .'<sup>2</sup></b></br>';
echo '<a href="segitiga.html">Hitung Kembali</a>'

?>

<html>
    <head>
    </head>
    <body bgcolor="aquamarine">
    </body>    
</html>