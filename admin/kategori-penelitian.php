<?php
//check level
session_start();
if(isset($_SESSION['level']) == "admin" AND $_SESSION['username']) {
	?>

	<?php
	//include header.php
	include("part/header.php");
	?>

	<?php
	//include sidebar.php
	include("part/sidebar.php");
	?>

	<!-- start content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row clearfix">
				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<h2>
								DATA KATEGORI PENELITIAN
							</h2>
							<div class="header-dropdown m-r--5">
								<li class="dropdown">
									<a href="tambah-kategori-penelitian.php" class="btn btn-success btn-md">TAMBAH KATEGORI PENELITIAN</a>
								</li>
							</div>
						</div>
						<div class="body">
							<table class="table table-bordered dataTable js-exportable">
								<thead>
								<tr>
									<th scope="col">NAMA KATEGORI</th>
									<th scope="col">AKSI</th>
								</tr>
								</thead>
								<tbody>
									<?php
										include('../config/koneksi.php');
										$query = "SELECT * FROM tbl_kategori_penelitian ORDER BY id_kategori DESC";
										$hasil = mysqli_query($connection, $query);

										while($row = mysqli_fetch_array($hasil)) {
									?>
									<tr>
										<td><?php echo $row["nama_kategori"] ?></td>
										<td style="text-align: center">
											<a href="edit-kategori.php?id=<?php echo $row["id_kategori"] ?>" class="btn btn-success btn-sm">Edit</a>

											<a href="edit-kategori.php?id=<?php echo $row["id_kategori"] ?>" class="btn btn-danger btn-sm">Delete</a>
										</td>
									</tr>

								<?php } ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end content -->

	<?php
	//include footer.php
	include("part/footer.php");
	?>

<?php }else{ ?>
	<?php header("location:../login.php")  ?>
<?php } ?>