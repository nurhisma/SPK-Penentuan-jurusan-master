<?php 
$nisn=$_POST['nisn_cek']; //menerima input dngan name nisn_cek
header('location:index.php?halaman=input_nilai&nisn='.$nisn); //menalihkan halaman dengan mengirim variabel nisn dengan get
 ?>