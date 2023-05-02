<?php


$nama_mahasiswa=$_POST['nama_mahasiswa'];
$nim=$_POST['nim'];
$bulan=$_POST['bulan'];
$tanggal_bayar=$_POST['tanggal_bayar'];
$bukti_transaksi=$_POST['bukti_transaksi'];
$nohp=$_POST['nohp'];
$email=$_POST['email'];


include "koneksi.php";

$qry = "INSERT INTO bayarkas VALUES(
    '$nama_mahasiswa', '$nim', '$bulan', '$tanggal_bayar','$bukti_transaksi'
    )";

$exec = mysqli_query($con, $qry);

if($exec){
    echo"<script>alert('Data berhasil disimpan'); window.location = 'formkas.php'; </script>";
}else{
    echo"Data gagal disimpan";
}