<?php 
include '../../conf.php'; 
include '../../conn.php';
$judul = post('judul'); 
$konten = post('konten'); 
$penulis = post('penulis');
$tanggal = post('tanggal');
 
$simpan = $koneksi->prepare("INSERT INTO artikel (`judul`,`konten`,`penulis`,`tanggal`) VALUES ('".$judul."','".$konten."','".$penulis."','".$tanggal."')"); 
$simpan->execute();
header("location:../../index.php?p=crud");
?>