<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<h3>Isi Data Diri</h3>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<div class="row"> 
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
		<?php 
			include '../koneksi.php';
			$id=$_GET['id'];
			$data=mysqli_query($konek,"SELECT * FROM data_diri WHERE id=$id");
			$new_data=mysqli_fetch_array($data);

		 ?>
			<form action="update.php" method="POST">
				<div class="panel panel-info">
					<div class="panel-body">
					<div class="form-grup">
						<label>NISN:<?php echo $new_data[0] ?></label>
						<input type="hidden" class="form-control" name="nisn" value="<?php echo $new_data[0] ?>">
					</div>
					<div class="form-grup">
						<label>Nama</label>
						<input type="text" class="form-control" name="nama" value="<?php echo $new_data[1] ?>">
					</div>
					
					<div class="form-grup">
						<label>Alamat</label>
						<input type="text" class="form-control" name="alamat" value="<?php echo $new_data[2] ?>">
					</div>
				<div class="form-grup">
					<label>Asal SMP</label>
					<input type="text" class="form-control" name="smp" value="<?php echo $new_data[3] ?>">
				</div>
				<div class="form-grup">
					<label>Tanggal Lahir</label>
					<input type="date" class="form-control" name="tanggallahir" value="<?php echo $new_data[2] ?>">
				</div>
				<div>
					<label>Jenis Kelamin</label>
					<div class="radio">
					  <label><input type="radio" name="jk" value="L">Laki-laki</label>
					</div>
					<div class="radio">
					  <label><input type="radio" name="jk" value="P">Perempuan</label>
					</div>
				</div>
				<div class="form-grup">
					<label>Agama</label>
					<select class="form-control" id="agama" name="agama">
				        <option value="islam">Islam</option>
				        <option value="kristen">Kristen</option>
				        <option value="hindu">Hindu</option>
				        <option value="budha">Budha</option>
				     </select>
				</div>
				<div class="form-grup" style="margin-top:10px">
					<input type="submit" class="btn btn-info" >
					<a href="menu.php?hal=siswa" class="btn btn-danger">Kembali</a>
				</div>
				</div>
			</form>
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>
