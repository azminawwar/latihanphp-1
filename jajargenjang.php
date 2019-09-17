<?php

//Asset Jajargenjang
$pjajargenjang = $_POST['pjajargenjang'];
$ljajargenjang = $_POST['ljajargenjang'];
$satuan = $_POST['sjajargenjang'];
$hjajargenjang = ($pjajargenjang * $ljajargenjang);


//luas jajargenjang
echo '<h1>Hasil</h1>';
echo 'Tinggi jajargenjang   : ' . $_POST['pjajargenjang'] . ' '. $satuan .'<br/>';
echo 'Lebar jajargenjang    : ' . $_POST['ljajargenjang'] . ' '. $satuan .'<br/>';

echo 'Luas jajargenjang adalah ' . $_POST['pjajargenjang'] . ' '. $satuan .'  dikali dengan ' . $_POST['ljajargenjang'] . ' '. $satuan .'<br/>';
echo '<b>Maka luas jajargenjang adalah </br>' . $hjajargenjang .' '. $satuan .'<sup>2</sup></b></br>';
echo '<a href="jajargenjang.html">Hitung Kembali</a>'

?>

<html>
    <head>
    </head>
    <body bgcolor="aquamarine">
    </body>    
</html>