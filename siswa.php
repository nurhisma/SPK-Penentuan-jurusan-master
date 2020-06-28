<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<div class="row">
				<div class="panel panel-info">
				<div class="panel-heading">Data Siswa</div>
				<div class="panel-body">
					<table class="table">
						<tr class="primary">
							<td>No</td>
							<td>NISN</td>
							<td>Nama</td>
							<td>Alamat</td>
							<td>SMP</td>
							<td>Tgl_lahir</td>
							<td>Jenis Kelamin</td>
							<td>agama</td>
							<td>Tindakan</td>
						</tr>
							<?php 
								//Include Koneksi .......
								include "../koneksi.php";
                				$pdo = new PDO('mysql:host=localhost;dbname=spk-penentu-jurusan', 'root', '');
                				// Cek apakah terdapat data pada page URL ========
                				$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

                				$limit = 3; // Jumlah data per halamanya
                				// Buat query untuk menampilkan data ke berapa yang akan ditampilkan pada tabel yang ada di database
                				$limit_start = ($page - 1) * $limit;
                				// Buat query untuk menampilkan data siswa sesuai limit yang ditentukan
                				$sql = $pdo->prepare("SELECT * FROM data_diri LIMIT ".$limit_start.",".$limit);
                				$sql ->execute(); // Eksekusi querynya

                				$no = $limit_start + 1; // Untuk penomoran tabel
                				while ($data = $sql->fetch()) {
                					echo "
                					<tr>
                						<td>".$no."</td>
                						<td>".$data[0]."</td>
                						<td>".$data[1]."</td>
                						<td>".$data[2]."</td>
                						<td>".$data[3]."</td>
                						<td>".$data[4]."</td>
                						<td>".$data[5]."</td>
                						<td>".$data[6]."</td>
                						<td><a href='menu.php?hal=edit&id=".$data[0]."' class='btn btn-success'>Edit</a><a href='hapus_data.php?id=".$data[0]."' class='btn btn-danger'>Hapus</td>
                					</tr>";
                					$no++;
                				}
							 ?>
					</table>
				</div>
				</div>
			</div>
			<!-- PAGINATION -->
			<div class="row">
				<ul class="pagination">
					<!-- LINK LANJUT DAN KEMBALI -->
					<?php 
					if ($page == 1) {// Jika page adalah pake ke 1, maka disable link PREV
						echo "
							<li class='disabled'><a href='#'>First</a></li>
                			<li class='disabled'><a href='#'>&laquo;</a></li>
						";
					}else{
						 $link_prev = ($page > 1) ? $page - 1 : 1;
						 echo "
						 	<li><a href='menu.php?hal=siswa&page=1'>First</a></li>
                			<li><a href='menu.php?hal=siswa&page=".$link_prev."'>&laquo;</a></li>
						 ";
					}
					// Buat query untuk menghitung semua jumlah data
           			$sql2 = $pdo->prepare("SELECT COUNT(*) AS jumlah FROM data_diri");
            		$sql2->execute(); // Eksekusi querynya
           			$get_jumlah = $sql2->fetch();

           			$jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamanya
            		$jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
            		$start_number = ($page > $jumlah_number) ? $page - $jumlah_number : 1; // Untuk awal link member
            		$end_number = ($page < ($jumlah_page - $jumlah_number)) ? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number

            		 for ($i = $start_number; $i <= $end_number; $i++) {
                	$link_active = ($page == $i) ? 'class="active"' : '';
            			?>
                		<li <?php echo $link_active; ?>><a href="menu.php?hal=siswa&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            			<?php
            			}
					 ?>
					<?php
            // Jika page sama dengan jumlah page, maka disable link NEXT nya
            // Artinya page tersebut adalah page terakhir
            if ($page == $jumlah_page) { // Jika page terakhir
            ?>
                <li class="disabled"><a href="#">&raquo;</a></li>
                <li class="disabled"><a href="#">Last</a></li>
            <?php
            } else { // Jika bukan page terakhir
                $link_next = ($page < $jumlah_page) ? $page + 1 : $jumlah_page;
            ?>
                <li><a href="home.php?menu=lihat&page=<?php echo $link_next; ?>">&raquo;</a></li>
                <li><a href="home.php?menu=lihat&page=<?php echo $jumlah_page; ?>">Last</a></li>
            <?php
            }
            ?>
				</ul>
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>