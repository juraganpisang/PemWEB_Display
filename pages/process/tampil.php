<?php 
// menghubungkan dengan koneksi
include '../../koneksi.php';
$data = mysqli_query($koneksi,"SELECT kode_booking FROM tbl_pembeli ORDER BY id_pembeli DESC LIMIT 1");
$kode_booking = mysqli_fetch_row($data);
?>
<div style="background-color:white;margin-bottom:10px;margin-top:10px;"><p style="font-size:24px;color:black;text-align:center;">KODE BOOKING : <?php echo $kode_booking[0];?></p></div>
<p style="color:white;text-align:center;">Silahkan Simpan Kode Ini,<br> Lalu datanglah ke Marketing Kami di<br>
Jl. Gunung Harta No 34 Malang</p>