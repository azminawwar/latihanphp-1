<?php

//Asset Jajargenjang
$pjajargenjang = $_POST['pjajargenjang'];
$ljajargenjang = $_POST['ljajargenjang'];
$hjajargenjang = ($pjajargenjang * $ljajargenjang);


//luas jajargenjang
echo '<h1>Hasil</h1>';
echo 'Tinggi jajargenjang   : ' . $_POST['pjajargenjang'] . '<br/>';
echo 'Lebar jajargenjang    : ' . $_POST['ljajargenjang'] . '<br/>';

echo 'Luas jajargenjang adalah ' . $_POST['pjajargenjang'] . ' dikali dengan ' . $_POST['ljajargenjang'] . '<br/>';
echo '<b>Maka luas jajargenjang adalah ' . $hjajargenjang .'</b></br>';
echo '<a href="jajargenjang.html">Hitung Kembali</a>'

?>

<html>
    <head>
    </head>
    <body bgcolor="aquamarine">
    </body>    
</html>