<?php 
// koneksi database
require('../config/koneksidb.php');
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($connection,"DELETE FROM tbl_transaksi WHERE id_transaksi='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
 
?>