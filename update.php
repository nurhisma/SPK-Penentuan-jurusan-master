<?php 
$nama=$_POST['nama'];
$nisn=$_POST['nisn'];
$alamat=$_POST['alamat'];
$date=$_POST['tanggallahir'];
$smp=$_POST['smp'];
$jk=$_POST['jk'];
$agama=$_POST['agama'];
include '../koneksi.php';
//echo $nama,"=========alamat:",$alamat,"=========Date:",$date,"=========JK:",$jk,"====agama:",$agama,"====smp:",$smp;
mysqli_query($konek,"UPDATE `data_diri` SET `nama`='$nama',`alamat`='$alamat',`smp`='$smp',`tgl_lahir`='$date',`jk`='$jk',`agama`='$agama' WHERE `id`='$nisn'");


header('location:menu.php?hal=siswa');


 ?>