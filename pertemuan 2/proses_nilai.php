<?php
if (isset($_GET['submit'])) {
    $Nama = $_GET['Nama'];
$Matkul = $_GET['Matkul'];
$UTS = $_GET['UTS'];
$UAS = $_GET['UAS'];
$Praktikum = $_GET['Praktikum'];

echo "Nama: $Nama <br>";
echo "Mata Kuliah: $Matkul <br>";
echo "Nilai UTS: $UTS <br>";
echo "Nilai UAS: $UAS <br>";
echo "Nilai Praktikum: $Praktikum <br>";
} else{
    echo "Tidak Ada Data";
}