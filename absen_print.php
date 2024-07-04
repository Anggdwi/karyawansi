<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CV KOSMETIK AYSHOP</title>
	<link rel="icon" href="img/logo1.png" type="image/png">
    
        <title>Print Data Absen</title>
    </head>
    <body onload="window.print()">
    <h3>Data Absen</h3>
    <hr>
    <table class="table table-bordered table-striped table-earning" style="border: 1px solid black;">
                                        <thead>
                                            <tr>
                                            <th style="border: 1px solid black;">No</th>  
                                            <th style="border: 1px solid black;">NIK </th>
                                            <th style="border: 1px solid black;">Nama</th>
                                            <th style="border: 1px solid black;">Waktu</th>
                                
                                                
                                            </tr>
                                        </thead>
                                        

                                        <?php 
                                            include 'koneksi.php';
                                            $sql = "SELECT * FROM tb_absen";
                                            $query = mysqli_query($koneksi, $sql);

                                            $no = 1;
                                            while ($row = mysqli_fetch_array($query)) {
                                                
                                            
                                         ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $row['id_karyawan']; ?></td>
                                                <td><?php echo $row ['nama']; ?></td>
                                                <td><?php echo $row['waktu']; ?></td>
                                                
                                                    

                                                </td>
                                               
                                                
                                            </tr>
                                           <?php 
                                           $no++;
                                       }

                                            ?>
                                        </tbody>
                                    </table>
                                </div>

    </body>
</html>