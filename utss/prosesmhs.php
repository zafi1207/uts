<?php

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$gender=$_POST['gender'];
$alamat=$_POST['alamat'];
$nohp=$_POST['nohp'];
$email=$_POST['email'];


include "koneksi.php";

$qry = "INSERT INTO mahasiswa VALUES(
    '$nim', '$nama', '$jurusan', '$gender','$alamat','$nohp','$email'
    )";

$exec = mysqli_query($con, $qry);

if($exec){
    echo"<script>alert('Data berhasil disimpan'); window.location = 'dos.html'; </script>";
}else{
    echo"Data gagal disimpan";
}