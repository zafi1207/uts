<?php
$nim = $_GET['nim'];
include "koneksi.php";
$qry = "DELETE FROM bayarkas WHERE nim = '$nim'";
$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil dihapus'); window.location = 'formkas.php' </script>";
}else{
    echo "Data gagal dihapus";
}
    ?>