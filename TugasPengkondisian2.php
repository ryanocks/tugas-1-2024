<?php
$kelas = "xii rpl 1";
$nama = "rayan";
$namabuku = "pemrograman web dan perangkat bergerak";
$tglPinjam = 5 ;
$tglKmbali = 6 ;
$tglDkmbl = 19;
$denda = 50000;

$selHari = $tglDkmbl - $tglKmbali;

if ($tglDkmbl > $tglKmbali){
    $total = $selHari * $denda;
    $status = "telat mengembalikan";
}else if($tglDkmbl == $tglKmbali){
    $total = $selHari == $denda;
    $status = "sudah mengembalikan";
}else if($tglDkmbl < $tglKmbali && $tglDkmbl != null){
    $total = $selHari == $denda;
    $status = "sudah mengembalikan";
}else{
    $total = $selHari == $denda;
    $status = "blom mengembalikan";
}




echo "kelas : $nama <br>";
echo "nama peminjam : $kelas <br>";
echo "nama buku : $namabuku <br>";
echo "tanggal peminjaman : $tglPinjam januari 2024 <br>";
echo "tanggal pengembalian : $tglKmbali januari 2024 <br>";
if ($tglDkmbl){
    echo "tanggal dikembalikan :$tglDkmbl januari 2024 <br>";
}else if ($tglDkmbl == null){
    echo "tanggal dikembalikan : - <br>";
}
echo "denda :";
echo number_format($total);
echo "<br>";
echo "status : $status";
?>