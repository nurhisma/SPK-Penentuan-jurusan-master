<?php
include"../koneksi.php";

$id=$_GET['id'];

mysqli_query($konek,"DELETE FROM nilai WHERE id=$id");
header('location:menu.php?hal=nilai');
?>