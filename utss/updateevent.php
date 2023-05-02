<?php


$nama_mahasiswa=$_POST['nama_mahasiswa'];
$nim=$_POST['nim'];
$angkatan=$_POST['angkatan'];
$event=$_POST['event'];



include "koneksi.php";

$qry = "UPDATE partisipasi_event SET 
        nama_mahasiswa = '$nama_mahasiswa',
        angkatan = '$angkatan',
        event = '$event'
        WHERE nim = '$nim'
        ";

$exec = mysqli_query($con, $qry);

if($exec){
    echo"<script>alert('Data berhasil disimpan'); window.location = 'formevent.php'; </script>";
}else{
    echo"Data gagal disimpan";
}