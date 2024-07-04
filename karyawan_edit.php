<?php 
require_once("koneksi.php");
error_reporting(0);
session_start();
 ?>
 
<?php 
	include 'koneksi.php';
	$id = $_GET['id_karyawan'];
	$data = mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE id_karyawan = '$id'");
    while ($d = mysqli_fetch_array($data)) {
      
    
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CV KOSMETIK AYSHOP</title>
	<link rel="icon" href="img/logo1.png" type="image/png">
  
  <!-- Idiot-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Idiot-->
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Data Karyawan</title>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- end script-->

    <title>Ubah Data</title>
</head>
<body>
<form action="proedit_karyawan.php" method="POST" enctype="multipart/form-data">
<style>
    .form-group input {
        margin-top: -10px; 
    }
</style>
<div class="form-group d-flex align-items-center">
    <label for="exampleInputEmail1"><b>NIK</b></label>
  <input type="text" class="form-control" readonly="" name="id_karyawan" autocomplete="off" value="<?php echo $d['id_karyawan'];?>">
    

  </div>
  <div class="form-group d-flex align-items-center">
    <label for="exampleInputEmail1"><b>username</b></label>
  <input type="text" class="form-control" name="username" autocomplete="off" value="<?php echo $d['username'];?>">
    
  </div>
  <div class="form-group d-flex align-items-center">
    <label for="exampleInputEmail1"><b>password</b></label>
  <input type="text" class="form-control"  name="password" autocomplete="off"> 
    
  </div>

  <div class="form-group d-flex align-items-center">
    <label for="exampleInputPassword1"><b>Nama</b></label>
    <input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $d['nama'];?>">
  </div>
  <div class="form-group d-flex align-items-center">
    <label for="exampleInputPassword1"><b>Tempat Lahir</b></label>
    <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" value="<?php echo $d['tempat_lahir'];?>">
  </div>
  <div class="form-group d-flex align-items-center">
    <label for="exampleInputPassword1"><b>Tanggal Lahir</b></label>
    <input type="text" class="form-control" name="tanggal_lahir" autocomplete="off" value="<?php echo $d['tanggal_lahir'];?>">
  </div>
  <div class="form-group d-flex align-items-center">
    <label for="exampleInputPassword1"><b>Jenis Kelamin</b></label>
      <select class="form-control" name="jenkel">
                                                    <option><?php echo $d['jenkel']; ?></option>
                                                    <option>Laki-laki</option>
                                                    <option>Perempuan</option>
                                                </select>
  </div>
  <div class="form-group d-flex align-items-center">
    <label for="exampleInputPassword1"><b>Agama</b></label>
    <select class="form-control" name="agama">
    <option><?php echo $d['agama']; ?></option>
                                                        <option>Islam</option>
                                                        <option>Kristen</option>
                                                        <option>Katholik</option>
                                                        <option>Hindu</option>
                                                        <option>Buddha</option>
                                                        <option>KongHuCu</option>
                                                    </select>
  </div>
  <div class="form-group d-flex align-items-center">
    <label for="exampleInputPassword1"><b>Alamat</b></label>
    <textarea autocomplete="off" class="form-control" name="alamat" value="<?php echo $d['alamat'];?>"></textarea>
  
  </div>
  <div class="form-group d-flex align-items-center">
    <label for="exampleInputPassword1"><b>Telepon</b></label>
   <input type="text" class="form-control"  name="no_tel" value="<?php echo $d['no_tel'];?>">
  </div>
  <div class="form-group d-flex align-items-center">
    <label for="exampleInputPassword1"><b>Jabatan</b></label>
                                                <select class="form-control" name="jabatan">
                                                <?php 

                                                include 'koneksi.php';

                                                $sql = "SELECT * FROM tb_jabatan";

                                                $hasil = mysqli_query($koneksi, $sql);

                                                $no = 0;

                                                while ($data = mysqli_fetch_array($hasil)) {
                                                    
                                                $no++;
                                                

                                                 ?>
                                                <option value="<?php echo $data['jabatan'];?>"><?php echo $data['jabatan']; ?></option>
                                                <?php } ?>
                                               
                                                </select>
                                                </div>
                                                
 <div class="form-group">
    <label for="exampleInputPassword1">Foto</label><br>
  <?php 
            if ($d['foto']!=''){
                          echo "<img src=\"images/$d[foto]\" height=150 />";  
                        }
                        else{
                          echo "tidak ada gambar";
                        }
   ?>
  </div>

  <div class="form-group">
                    <label>FOTO</label>
                    <input type="checkbox" name="ubahfoto" value="true"> Ceklis jika ingin mengubah foto !
                    <br>
                    <input type="file" name="inpfoto">
                  </div>

  <button type="submit" class="btn btn-primary" name="ubahdata">Ubah Data</button>
</form>
</body>
</html>

<?php } ?>
