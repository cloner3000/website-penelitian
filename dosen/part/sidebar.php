<!-- #Top Bar -->
<section>
	<!-- Left Sidebar -->
	<aside id="leftsidebar" class="sidebar">
		<!-- User Info -->
		<div class="user-info">
			<div class="image">
				<img src="../images/user.png" width="48" height="48" alt="User" />
			</div>
			<div class="info-container">
				<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'] ?></div>
				<div class="email">john.doe@example.com</div>
			</div>
		</div>
		<!-- #User Info -->
		<!-- Menu -->
		<div class="menu">
			<ul class="list">
				<li class="header">MAIN NAVIGATION</li>
				<li class="active">
					<a href="index.php">
						<i class="material-icons">home</i>
						<span>DASHBOARD</span>
					</a>
				</li>
				<li>
					<a href="profil-dosen.php">
						<i class="material-icons">person</i>
						<span>PROFIL DOSEN</span>
					</a>
				</li>
				<li>
					<a href="penelitian.php">
						<i class="material-icons">work</i>
						<span>PENELITIAN</span>
					</a>
				</li>
				
				<li>
					<a href="skripsi-mahasiswa.php">
						<i class="material-icons">local_library</i>
						<span>SKRIPSI MAHASISWA</span>
					</a>
				</li>
				<li>
					<a href="logout.php">
						<i class="material-icons">input</i>
						<span>KELUAR</span>
					</a>
				</li>
			</ul>
		</div>
		<!-- #Menu -->
		<!-- Footer -->
		<div class="legal">
			<div class="copyright">
				&copy; 2018 <b>Universitas KH. A. Hasbullah.</b>
			</div>
			<div class="version">
				<b>Version: </b> 1.0.5
			</div>
		</div>
		<!-- #Footer -->
	</aside>