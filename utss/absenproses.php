<?php

$nama_mahasiswa=$_POST['nama_mahasiswa'];
$nim=$_POST['nim'];
$tanggal=$_POST['tanggal'];
$unit=$_POST['unit'];
$bukti_hadir=$_POST['bukti_hadir'];

include "koneksi.php";

$qry = "INSERT INTO absen_pelatihan VALUES(
    '$nama_mahasiswa', '$nim', '$tanggal', '$unit','$bukti_hadir'
    )";

$exec = mysqli_query($con, $qry);

if($exec){
    echo"<script>alert('Data berhasil disimpan'); window.location = 'absen.php'; </script>";
}else{
    echo"Data gagal disimpan";
}