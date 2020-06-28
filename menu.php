<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/risol.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fonts/font-awesome.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/chart.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>

<div class="container-fluid">
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand navbar-link" href="index.php?page=home">SPK-SMA</a>
			</div>
			<div class="navbar-collapse" id="navcol-1" name="navcol-1">
				<UL class="nav navbar-nav navbar-right" >
					<li role="presentation"><a href="menu.php?hal=siswa"> | Siswa</a></li>
					<li role="presentation"><a href="menu.php?hal=nilai"> | Nilai</a></li>
					<li role="presentation"><a href="./"> | logout</a></li>
					<!-- <li role="presentation"><a href="index.php?halaman=contact"><font color="white">Contact</font></a></li> -->
					
				</UL>
			</div>
		</div>
	</nav>
</div>
<!-- ============== BODY ============ -->
<?php 
switch (@$_GET['hal']) {
	case 'siswa':
		include"siswa.php";
		break;
	case 'nilai':
		include"nilai.php";
		break;
	case 'edit':
		include"edit.php";
		break;
	default:
		include"nilai.php";
		break;
}
 ?>
</body>
</html>