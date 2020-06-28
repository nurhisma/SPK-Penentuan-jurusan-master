<?php 
$nama=$_POST['nama'];
$nisn=$_POST['nisn'];
$alamat=$_POST['alamat'];
$date=$_POST['tanggallahir'];
$smp=$_POST['smp'];
$jk=$_POST['jk'];
$agama=$_POST['agama'];
include 'koneksi.php';
//echo $nama,"=========alamat:",$alamat,"=========Date:",$date,"=========JK:",$jk,"====agama:",$agama,"====smp:",$smp;
mysqli_query($konek,"INSERT INTO `data_diri`(`id`,`nama`, `alamat`, `smp`, `tgl_lahir`, `jk`, `agama`)
 VALUES ('$nisn','$nama','$alamat','$smp','$date','$jk','$agama')");


header('location:index.php?halaman=input_nilai&nisn='.$nisn);


 ?>