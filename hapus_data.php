<?php
include"../koneksi.php";

$id=$_GET['id'];

mysqli_query($konek,"DELETE FROM data_diri WHERE id=$id");
mysqli_query($konek,"DELETE FROM nilai WHERE nisn=$id");
header('location:menu.php?hal=siswa');
?>