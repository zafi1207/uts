<?php

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$gender=$_POST['gender'];
$alamat=$_POST['alamat'];
$nohp=$_POST['nohp'];
$email=$_POST['email'];


include "koneksi.php";

$qry = "UPDATE mahasiswa SET 
        Nama = '$nama',
        Jurusan = '$jurusan',
        Gender = '$gender',
        Alamat = '$alamat',
        Nohp = '$nohp',
        Email = '$email'
        WHERE NIM = '$nim'
        ";

$exec = mysqli_query($con, $qry);

if($exec){
    echo"<script>alert('Data berhasil disimpan'); window.location = 'formmhs.php'; </script>";
}else{
    echo"Data gagal disimpan";
}

?>