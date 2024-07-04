<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CV KOSMETIK AYSHOP</title>
  <link rel="icon" href="img/logo1.png" type="image/png">
  <style>
    /* Style for the modal (background) */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      padding-top: 100px;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0,0.9);
    }

    /* Style for the modal content (image) */
    .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
    }

    /* Caption text */
    .caption {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
      text-align: center;
      color: #ccc;
      padding: 10px 0;
      height: 150px;
    }

    /* Add animation */
    .modal-content, .caption {  
      animation-name: zoom;
      animation-duration: 0.6s;
    }

    @keyframes zoom {
      from {transform: scale(0)} 
      to {transform: scale(1)}
    }

    /* Close button */
    .close {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
    }

    .close:hover,
    .close:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
</head>
<body>

<?php 
include 'koneksi.php';

$batas = 5;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM tb_keterangan");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_karyawan = mysqli_query($koneksi, "SELECT * FROM tb_keterangan LIMIT $halaman_awal, $batas");
$nomor = $halaman_awal+1;
$no = 1;

while ($row = mysqli_fetch_array($data_karyawan)) {
?>
  <tr>
    <td><?php echo $no ?></td>
    <td><?php echo $row['id_karyawan']; ?></td>
    <td><?php echo $row['nama']; ?></td>
    <td><?php echo $row['keterangan']; ?></td>
    <td><?php echo $row['alasan']; ?></td>
    <td><?php echo $row['waktu']; ?></td>
    <td>
      <?php if ($row['bukti'] != '') { ?>
        <img src="karyawan/modul/karyawan/images/<?php echo $row['bukti']; ?>" style="width:100px; cursor:pointer;" onclick="showModal(this.src)" />
      <?php } else { ?>
        images
      <?php } ?>
    </td>
    <td>
      <a href="absen/hapus_keterangan.php?id=<?php echo $row['id']; ?>">
        <button class="btn btn-danger" onclick="return confirm('yakin ingin dihapus?');">Hapus</button>
      </a>
    </td>
  </tr>
<?php
  $no++;
}
?>

<!-- Modal Structure -->
<div id="myModal" class="modal" onclick="closeModal()">
  <span class="close" onclick="closeModal()">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption" class="caption"></div>
</div>

<script>
  // Function to show the modal
  function showModal(src) {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    
    modal.style.display = "block";
    modalImg.src = src;
    captionText.innerHTML = src;
  }

  // Function to close the modal
  function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
  }

  // Close the modal when clicking outside the image
  window.onclick = function(event) {
    var modal = document.getElementById("myModal");
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>

</body>