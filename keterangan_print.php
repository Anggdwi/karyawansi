<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CV KOSMETIK AYSHOP</title>
	<link rel="icon" href="img/logo1.png" type="image/png">
    
        <title>Print Data Keterangan</title>
    </head>
    <body onload="window.print()">
    <h3>Data Keterangan</h3>
    <hr>
    <div class="table-responsive table--no-card m-b-30">
    <table class="table table-bordered table-striped table-earning" style="border: 1px solid black;">
                                        <thead>
                                            <tr>
                                <th style="border: 1px solid black;">No</th>  
                                <th style="border: 1px solid black;">NIK Karyawan</th>
                                <th style="border: 1px solid black;">Nama</th>
                                <th style="border: 1px solid black;">Keterangan</th>
                                <th style="border: 1px solid black;">Alasan</th>
                                <th style="border: 1px solid black;">Waktu</th>
                                <th style="border: 1px solid black;">Bukti</th>
                                                
                                            </tr>
                                        </thead>
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

$data = mysqli_query($koneksi, "SELECT * FROM tb_keterangan");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_karyawan = mysqli_query($koneksi, "SELECT * FROM tb_keterangan LIMIT $halaman_awal, $batas");
$nomor = $halaman_awal+1;
$no =1;

while ($row=mysqli_fetch_array($data_karyawan)) {
	



 ?>

  <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $row['id_karyawan']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><?php echo $row['keterangan']; ?></td>
                                                <td><?php echo $row['alasan']; ?></td>
                                                <td><?php echo $row['waktu']; ?></td>
                                                
                                                
                                              <td>
                                                <?php
                                                
                                                if ($row['bukti']!='') {
                                                    $img_src = 'karyawan/modul/karyawan/images/' . htmlspecialchars($row['bukti'], ENT_QUOTES, 'UTF-8');
                                                    echo '<img src="' . $img_src . '" style="width: 25%; height: auto;">';
                                                }else{
                                                    echo 'images';
                                                }

                                                ?>

                                            </td>
                                                
                                            </tr>
                                        <?php 
                                        $no++;
                                    } ?>


                                        </tbody>
                                    </table>
                                    
                                </div>

    </body>
</html>