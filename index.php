<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
<div class="container" style="margin-top:70px">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<div class="panel panel-info">
			<div class="panel-heading">Login-Admin</div>
			<div class="panel-body">
			<form action="#" method="POST">
				<input type="text" name="user" placeholder="USERNAME" class="form-control" >
				<input type="password" name="pass" placeholder="PASSWORD" class="form-control" style="margin-top:15px">
				<input type="submit" value="masuk" class="btn btn-info" style="margin-top:15px">
			</form>
			</div>
		</div>
	</div>
	<div class="col-sm-4"></div>
</div>
<!-- <form action="#" method="POST">
	<input type="text" name="user" placeholder="USERNAME">
	<input type="password" name="pass" placeholder="PASSWORD">
	<input type="submit" value="masuk">
</form> -->
<?php  
if (@$_POST['user']=='admin' && $_POST['pass']=='admin') {
	echo "<script type='text/javascript'>alert('Login sukses');</script>";
	echo "<meta http-equiv='refresh' content='0; URL=http://localhost/SPK-penentu_jurusan/admin/menu.php'/>";
}
?>
</body>
</html>