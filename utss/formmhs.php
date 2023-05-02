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
    <div class="sectionform">
    <form action="prosesmhs.php" method="POST">
        <fieldset>
            <legend>Form Pendaftaran</legend>
             <h3>Lengkapi Biodata Dengan Benar</h3>
             <table>
                <tr>
                    <td>NIM (Nomor Induk Mahasiswa)</td>
                    <td>:</td>
                    <td><input type="number" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
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
                    <td><input type="radio" name="gender" value="1">Laki-Laki
                    <td><input type="radio" name="gender" value="2">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td><label for="nohp">No Hp</label></td>
                    <td>:</td>
                    <td><input type="number" name="nohp"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>:</td>
                    <td><input type="email" name="email"></td>
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
    <h2>Data Pendaftar</h2>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Nohp</th>
            <th>Email</th>
            <th>Act</th>
        </tr>

    <?php
        include "koneksi.php";
        $qry = "SELECT * FROM mahasiswa";
        $exec = mysqli_query($con,$qry);

        while($data=mysqli_fetch_assoc($exec)){

        ?>
    <tr>
         <td><?= $data['NIM']?></td>
         <td><?= $data['Nama']?></td>
         <td><?= $data['Jurusan']?></td>
         <td><?= $data['Gender'] == 1 ? "Laki-Laki" : "Perempuan" ?></td>
         <td><?= $data['Alamat']?></td>
         <td><?= $data['Nohp']?></td>
         <td><?= $data['Email']?></td>
         <td>
         <a href="editmhs.php?nim=<?= $data['NIM']?>"><button>Edit</button></a>
         <a href="deletemhs.php?nim=<?= $data['NIM']?>"><button>Delete</button></a>
        </td>
    </tr>
    <?php } ?>
    </table>
        </div>
</body>
</html>