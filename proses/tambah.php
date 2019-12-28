<?php

if (isset($_POST['tambahpost']) && $_POST['tambahpost'] == "Tambah" ) {
# code...
$id = $_POST['id_transaksi'];
$judul_post = $_POST['judul_post'];
$ket_post = $_POST['ket_post'];
$isi_post = $_POST['isi_post'];
	
//menyimpan data inputan ke database
	$queryinsert = "INSERT INTO tbl_admin (judul_post, ket_post, isi_post, gambar_post, gambar_2, gambar_3, file_video) VALUES ('$judul_post', '$ket_post', '$isi_post', '$gambar_post', '$gambar_2','$gambar_3', '$file_video')";
    
		if(mysqli_query($connection, $queryinsert)){
			header("Location: ?>page=postingan");

		}else{
			echo "<script>alert('Uploads Gagal')</script>";
		}

}
?>