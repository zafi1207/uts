<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="dos.css">
    <link rel="icon" type="image/x-icon" href="dos.png">
    <title>Pembayaran KAS</title>
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
<div class="sectionform">
    <form action="proseskas.php" method="POST">
        <fieldset>
            <legend>Form Pembayaran Kas</legend>
             <h3>Lengkapi Data Dengan Benar</h3>
             <table>
                <tr>
                    <td>NIM (Nomor Induk Mahasiswa)</td>
                    <td>:</td>
                    <td><input type="number" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama_mahasiswa"></td>
                </tr>
                <tr>
                    <td>Bulan</td>
                    <td>:</td>
                    <td><input type="text" name="bulan"></td>
                </tr>
                <tr>
                    <td>Tanggal Bayar</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_bayar"></td>
                </tr>
                <tr>
                    <td>Bukti Transaksi (Link Gdrive)</td>
                    <td>:</td>
                    <td><input type="text" name="bukti_transaksi"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button>Simpan</button></td>
                </tr>
             </table>
        </fieldset>
    </form>

    <br>
    <table id = "mahasiswa">
    <h2>Data Pembayaran</h2>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Bulan</th>
            <th>Tanggal Bayar</th>
            <th>Bukti Transaksi</th>
            <th>Act</th>
        </tr>

    <?php
        include "koneksi.php";
        $qry = "SELECT * FROM bayarkas";
        $exec = mysqli_query($con,$qry);

        while($data=mysqli_fetch_assoc($exec)){

        ?>
    <tr>
         <td><?= $data['nama_mahasiswa']?></td>
         <td><?= $data['nim']?></td>
         <td><?= $data['bulan']?></td>
         <td><?= $data['tanggal_bayar']?></td>
         <td><?= $data['bukti_transaksi']?></td>
         <td>
         <a href="editkas.php?nim=<?= $data['nim']?>"><button>Edit</button></a>
         <a href="deletekas.php?nim=<?= $data['nim']?>"><button>Delete</button></a>
        </td>
    </tr>
    <?php } ?>
    </table>
        </div>
</body>
</html>