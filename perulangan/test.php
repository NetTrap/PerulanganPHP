<?php


/* For Loop "Menampilkan Tabel Perkalian */
echo "<table border='1'>";
for ($i = 1; $i <=5; $i++) {    // Membuat tabel perkalian 1 hingga 5, dimana setiap sel tabel berisi hasil perkalian dar baris dan kolom yang sesuai.
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>"; echo "<br \>";

/* While Loop "Menghitung mundur" */
$countdown = 5;
while ($countdown > 0) {    // Menampilkan hitungan mundur dari 5 hingga 1
    echo "Hitungan ke: $countdown<br>";
    $countdown--;
}   echo "<br \>";

/* Do-While loop "Menampilkan Bilangn Ganijl"  */
$number = 1;
do {        
    echo "Angka Ganjil: $number<br>";       // Menampilkan Bilangan Ganjil dari 1 hingga 10
    $number += 2;
} while ($number <= 10);    echo "<br \>";

/* ForEach Loop  */
$fruits = array("Apel", "Gedang", "Duren", "Nongko");
foreach ($fruits as $buah) {
    echo "Buah: $buah<br>";
}   echo "<br \>";

/* Bersarabg "Nested"  */
for ($m = 1; $m <= 5; $m++) {       // Membuat pola Bintang 5 baris, dimana setiap baris menambah jumlah Bintang
    for ($n = 1; $n <= $m; $n++) {
        echo "*";
    }
    echo "<br>";
}

?>