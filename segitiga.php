<?php

//Asset Segitiga
$psegitiga = $_POST['psegitiga'];
$lsegitiga = $_POST['lsegitiga'];
$hsegitiga = ($psegitiga * $lsegitiga / 2);

//luas segitiga
echo '<h1>Hasil</h1>';
echo 'Tinggi Segitiga   : ' . $_POST['psegitiga'] . '<br/>';
echo 'Lebar Segitiga    : ' . $_POST['lsegitiga'] . '<br/>';

echo 'Luas segitiga adalah ' . $_POST['psegitiga'] . ' dikali dengan ' . $_POST['lsegitiga'] . ' dibagi dengan 2<br/>';
echo '<b>Maka luas segitiga adalah ' . $hsegitiga .'</b></br>';
echo '<a href="segitiga.html">Hitung Kembali</a>'

?>

<html>
    <head>
    </head>
    <body bgcolor="aquamarine">
    </body>    
</html>