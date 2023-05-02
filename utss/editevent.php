<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="dos.css">
    <link rel="icon" type="image/x-icon" href="dos.png">
    <title>Absen</title>
</head>
<body>
<header>
        <a href="home.php" class="logo"><img src="dos.png" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="jadwal.php">Jadwal Latihan</a></li>
            <li><a href="formkas.php">Pembayaran KAS</a></li>
            <li><a href="absen.php">Absen Kehadiran</a></li>
            <li><a href="formevent.php">Daftar Partisipasi</a></li>
        </ul>
        <div class="header-btn">
            <a href="dos.html" class="sign-in">Logout</a>
        </div>
</header>
<?php
$nim= $_GET['nim'];
include "koneksi.php";

$qry = "SELECT * FROM partisipasi_event WHERE nim = '$nim'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);

?>
<div class="sectionform">
<form action="updateevent.php" method="POST">
        <fieldset>
            <legend>Form Partisipasi Event</legend>
             <h3>Lengkapi Data Dengan Benar</h3>
             <table>
                <tr>
                    <td>NIM (Nomor Induk Mahasiswa)</td>
                    <td>:</td>
                    <td><input type="number" name="nim" value="<?= $data['nim']?>"></td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama_mahasiswa" value="<?= $data['nama_mahasiswa']?>"></td>
                </tr>
                <tr>
                    <td>Angkatan (20/21/22)</td>
                    <td>:</td>
                    <td><input type="number" name="angkatan" value="<?= $data['angkatan']?>"></td>
                </tr>
                <tr>
                    <td>event</td>
                    <td>:</td>
                    <td><input type="text" name="event" value="<?= $data['event']?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button>Simpan</button></td>
                </tr>
             </table>
        </fieldset>
    </form>
</div>