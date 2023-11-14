<?php

/* Perulangan For */
for ($i = 0; $i < 10; $i++) {
    echo "<h2>Ini perulangan ke$i</h2>";
}   echo "<br \>";

/* Perulanan While */
$baleni = 0;

while ($baleni < 10) {
    echo "<p> Ini adalah perulangan ke-$baleni";
    $baleni++;
}   echo "<br \>";

/* Perulangan Do While */
$balen = 10;
do {
    echo "<p>Ini adalah perulangan ke-$balen</p>";
    $balen++;
} while ($balen > 0);   echo "<br \>";

/* Perulangan Foreach */
$books = [
    "Panduan Belajar PHP untuk Pemula",
    "Membangn Aplikasi Web dengan PHP",
    "Tutorial PHP dan MySQL",
    "Membuat Chat Bot dengan PHP"
];

echo "<h5>Judul Buku PHP</h5>";
echo "<ul>";
foreach($books as $buku) {
    echo "<li>$buku</li>";
}
echo "</ul>";   echo "<br \>";

/* Perulangan Bersarang */
echo "Contoh 1";
for ($k = 0; $k < 5; $k++) {
    for ($j = 0; $j < 10; $j++) {
        echo "Ini perulangan ke ($k, $j)<br>";
    }
}   echo "<br \>";

echo "Contoh2";
$l = 0;
while ($l < 10) {
    for ($m = 0; $m < 10; $m++) {
        echo "Ini perulangan ke ($l, $m<br>";
    }

    $l++;
}

?>