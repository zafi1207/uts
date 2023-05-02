<?php


$nama_mahasiswa=$_POST['nama_mahasiswa'];
$nim=$_POST['nim'];
$angkatan=$_POST['angkatan'];
$event=$_POST['event'];

include "koneksi.php";

$qry = "INSERT INTO partisipasi_event VALUES(
    '$nama_mahasiswa', '$nim', '$angkatan', '$event'
    )";

$exec = mysqli_query($con, $qry);

if($exec){
    echo"<script>alert('Data berhasil disimpan'); window.location = 'formevent.php'; </script>";
}else{
    echo"Data gagal disimpan";
}