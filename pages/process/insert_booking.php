<?php
// menghubungkan dengan koneksi
include '../../koneksi.php';


//untuk mengacak
$character = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$characterLength = strlen($character);
$randomString = "";
for ($i=0; $i <$characterLength ; $i++) { 
	$randomString .= $character[rand(0, $characterLength-1)];
}
$kode_booking = $randomString;
$nama = $_POST['nama'];
$no_ktp = $_POST['no_ktp'];
$kode_rumah = $_POST['kode_rumah'];
$no_hp = $_POST['no_hp'];
//buat kueri untuk menampilkan data rumah dengan kondisi sesuai dengan kode rumah
//lalu join kan dengan kueri tbl harga


$sub_kode = substr($kode_rumah, 0, 1);
$query = mysqli_query($koneksi, "INSERT INTO tbl_pembeli(kode_booking, nama, no_ktp, kode_rumah, no_hp) VALUES ('".$kode_booking."','".$nama."','".$no_ktp."','".$kode_rumah."','".$no_hp."')");
$update = mysqli_query($koneksi, "UPDATE tbl_rumah SET foto='sold".$sub_kode.".jpg', terjual=1 WHERE kode_rumah='".$kode_rumah."'");
?>