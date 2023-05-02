<?php


$nama_mahasiswa=$_POST['nama_mahasiswa'];
$nim=$_POST['nim'];
$bulan=$_POST['bulan'];
$tanggal_bayar=$_POST['tanggal_bayar'];
$bukti_transaksi=$_POST['bukti_transaksi'];


include "koneksi.php";

$qry = "UPDATE bayarkas SET 
        nama_mahasiswa = '$nama_mahasiswa',
        bulan = '$bulan',
        tanggal_bayar = '$tanggal_bayar',
        bukti_transaksi = '$bukti_transaksi'
        WHERE nim = '$nim'
        ";

$exec = mysqli_query($con, $qry);

if($exec){
    echo"<script>alert('Data berhasil disimpan'); window.location = 'formkas.php'; </script>";
}else{
    echo"Data gagal disimpan";
}