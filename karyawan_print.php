<!DOCTYPE html>
<html>

    <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CV KOSMETIK AYSHOP</title>
	<link rel="icon" href="img/logo1.png" type="image/png">

        <title>Print Data Karyawan</title>
    </head>
    <body onload="window.print()">
    <h3>Data Karyawan</h3>
    <hr>
    <table class="table table-bordered table-striped table-earning" style="border: 1px solid black;">
                                        <thead>
                                            <tr>
                                                
        <th style="border: 1px solid black;">NIK</th>
        <th style="border: 1px solid black;">Nama</th>
        <th style="border: 1px solid black;">Tempat Lahir</th>
        <th style="border: 1px solid black;">Tanggal Lahir</th>
        <th style="border: 1px solid black;">Jenis Kelamin</th>
        <th style="border: 1px solid black;">Agama</th>
        <th style="border: 1px solid black;">Alamat</th>
        <th style="border: 1px solid black;">Nomor Telepon</th>
        <th style="border: 1px solid black;">Jabatan</th>
        <th style="border: 1px solid black;">Foto</th>
      </tr>
    </thead>
    <tbody>
                                                
                                            
                                        <?php 
                                            

                                            $no = 1;
                                          
                                                
                                            
                                         ?>
                                        <tbody>
                                           
                                           <?php 
                                           include 'koneksi.php';

                                           $batas = 50;
                                           $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                                           $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
                                           
                                           $previous = $halaman - 1;
                                           $next = $halaman + 1;
                                           
                                           $data = mysqli_query($koneksi, "SELECT * FROM tb_karyawan");
                                           $jumlah_data = mysqli_num_rows($data);
                                           $total_halaman = ceil($jumlah_data / $batas);
                                           
                                           $data_karyawan = mysqli_query($koneksi, "SELECT * FROM tb_karyawan LIMIT $halaman_awal, $batas");
                                           $nomor = $halaman_awal+1;
                                           
                                           if (isset($_GET['cari'])) {
                                               $cari = $_GET['cari'];
                                           
                                               $data = mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE nama LIKE '%".$cari."%'");
                                           }else{
                                               $data = mysqli_query($koneksi, "SELECT * FROM tb_karyawan");
                                           }
                                           
                                           
                                           
                                           
                                           
                                           while ($row=mysqli_fetch_array($data_karyawan)) {
                                               
                                           
                                           
                                           
                                            ?>
                                           
                                             <tr>
                                                                                    
                                                                                           <td><?php echo $row['id_karyawan']; ?></td>
                                                                                           <td><?php echo $row['nama']; ?></td>
                                                                                           <td><?php echo $row['tempat_lahir']; ?></td>
                                                                                           <td><?php echo $row['tanggal_lahir']; ?></td>
                                                                                           <td><?php echo $row['jenkel']; ?></td>
                                                                                           <td><?php echo $row['agama']; ?></td>
                                                                                           <td><?php echo $row['alamat']; ?></td>
                                                                                           <td><?php echo $row['no_tel']; ?></td>
                                                                                           <td><?php echo $row['jabatan']; ?></td>
                                                                                               <td><img src="images/<?php echo $row['images'];?>" width="55px" height="55px"></td>
                                           
                                           
                                           
                                                                                          
                                           
                                                                                           
                                                                                       </tr>
                                                                                   <?php } ?>

                                        
                                        </tbody>
                                    </table>
    </body>
</html>