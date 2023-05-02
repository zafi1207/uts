<?php

$nama_mahasiswa=$_POST['nama_mahasiswa'];
$nim=$_POST['nim'];
$tanggal=$_POST['tanggal'];
$unit=$_POST['unit'];
$bukti_hadir=$_POST['bukti_hadir'];

include "koneksi.php";

$qry = "UPDATE absen_pelatihan SET 
        nama_mahasiswa = '$nama_mahasiswa',
        tanggal = '$tanggal',
        unit = '$unit',
        bukti_hadir = '$bukti_hadir'
        WHERE nim = '$nim'
        ";

$exec = mysqli_query($con, $qry);

if($exec){
    echo"<script>alert('Data berhasil disimpan'); window.location = 'absen.php'; </script>";
}else{
    echo"Data gagal disimpan";
}
