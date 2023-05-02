<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="dos.css">
    <link rel="icon" type="image/x-icon" href="dos.png">
    <title>Pendaftaran</title>
</head>
<body>
<header>
        <a href="dos.html" class="logo"><img src="dos.png" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>
<?php
$nim= $_GET['nim'];
include "koneksi.php";

$qry = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);

?>
<div class="sectionform">
<form action="updatemhs.php" method="POST">
        <fieldset>
            <legend>Form Input Biodata Mahasiswa</legend>
             <h3>Lengkapi Biodata Dengan Benar</h3>
             <table>
                <tr>
                    <td>NIM (Nomor Induk Mahasiswa)</td>
                    <td>:</td>
                    <td><input type="number" name="nim" value="<?= $data['NIM']?>"read only></td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama"value="<?= $data['Nama']?>"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan">
                        <option value="TI">Teknologi Informasi</option>
                        <option value="SI">Sistem Informasi</option>
                        <option value="SK">Sistem Komputer</option>
                        <option value="BD">Bisnis Digital</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <?php
                        if($data['Gender']== 1){
                    ?>
                            <td><input type="radio" name="gender" value="1" checked>Laki-Laki
                            <td><input type="radio" name="gender" value="2">Perempuan
                    <?php } else { ?>
                        <td><input type="radio" name="gender" value="1">Laki-Laki
                        <td><input type="radio" name="gender" value="2" checked>Perempuan
                    <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" value="<?= $data['Alamat']?>"></td>
                </tr>
                <tr>
                    <td><label for="nohp">No Hp</label></td>
                    <td>:</td>
                    <td><input type="number" name="nohp" value="<?= $data['Nohp']?>"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>:</td>
                    <td><input type="email" name="email"value="<?= $data['Email']?>"></td>
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