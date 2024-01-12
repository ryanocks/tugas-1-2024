<?php

$namaBarang = "Printer hp laserjet 001";
$kodeBarang = "hp 001";
$hargaBarang = 100000;
$jumlahBarang = 3;
$diskon = 50000;
$status = "sudah bayar" ;


if ($hargaBarang > 100000){
    $total = $hargaBarang * $jumlahBarang - $diskon;
}else {
$total = $hargaBarang * $jumlahBarang;
}

    echo "========= Program Menghitung Pembelian Barang ======== <br><br>";
    echo "$namaBarang <br>";
    echo "$kodeBarang <br>";
    echo "harga : $hargaBarang <br>";
    echo "jumlah :$jumlahBarang <br>";
    echo "diskon :$diskon <br>";
    echo "total : $total<br>";

if ($status == "proses"){
    echo "status :<p style='color: yellow; margin-top:0;'>$status</p>";
}else if ($status == "sudah bayar"){
    echo "status :<p style='color: green; margin-top:0;'>$status</p>";
}else{
    echo "data salah";
}




?>
