<?php 

include 'koneksi.php';

if (isset($_POST['simpan'])) {
	
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
}

$save = "INSERT INTO tb_daftar SET nama='$nama', username='$username', password='$password'";
mysqli_query($koneksi, $save);

if ($save) {
	echo "sukses";
}else{
	echo "gagal disimpan";
}

 ?>