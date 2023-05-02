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
<div class="sectionform">
    <form action="absenproses.php" method="POST">
        <fieldset>
            <legend>Form Absensi</legend>
             <h3>Lengkapi Data Dengan Benar</h3>
             <table>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama_mahasiswa"></td>
                </tr>
                <tr>
                    <td>NIM (Nomor Induk Mahasiswa)</td>
                    <td>:</td>
                    <td><input type="number" name="nim"></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal">
                    </td>
                </tr>
                <tr>
                    <td>Unit</td>
                    <td>:</td>
                    <td><select name="unit">
                        <option value="F">Fighter</option>
                        <option value="D">Dazzle</option>
                        <option value="H">Heroes</option>
                        <option value="E">Event</option>
                        <option value="PR">Pelatihan Raya</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Bukti Hadir(link gdrive)</td>
                    <td>:</td>
                    <td><input type="text" name="bukti_hadir"></td>
                </tr>
                </tr>
                    <td></td>
                    <td></td>
                    <td><button>Simpan</button></td>
                </tr>
             </table>
        </fieldset>
    </form>
    <br>
    <table id = "mahasiswa">
    <h2>Data Kehadiran</h2>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Tanggal</th>
            <th>Unit</th>
            <th>Bukti Hadir</th>
            <th>Act</th>
        </tr>

    <?php
        include "koneksi.php";
        $qry = "SELECT * FROM absen_pelatihan";
        $exec = mysqli_query($con,$qry);

        while($data=mysqli_fetch_assoc($exec)){

        ?>
    <tr>
         <td><?= $data['nama_mahasiswa']?></td>
         <td><?= $data['nim']?></td>
         <td><?= $data['tanggal']?></td>
         <td><?= $data['unit']?></td>
         <td><?= $data['bukti_hadir']?></td>
         <td>
         <a href="absenedit.php?nim=<?= $data['nim']?>"><button>Edit</button></a>
         <a href="absendelete.php?nim=<?= $data['nim']?>"><button>Delete</button></a>
        </td>
    </tr>
    <?php } ?>
    </table>
        </div>
</body>
</html>