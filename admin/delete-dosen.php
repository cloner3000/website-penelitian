<?php

//include koneksi ke database
include_once('../config/koneksi.php');
//get nidn
$nidn = $_GET['nidn'];
$query = "DELETE FROM tbl_dosen WHERE nidn = '$nidn'";
$result = mysqli_query($connection, $query);
if ($connection->query($query) === TRUE) {
	echo "Delete record  successfully";
	echo "<br>";
	echo "<button><a href='dosen.php'>Kembali</a></button>";
} else {
	echo "Error: " . $query . "<br>" . $connection->error;
	echo "<br>";
	echo "<button><a href='tambah-dosen.php'>Tambah Data Dosen</a></button>";
}
 ?>