$query = mysqli_query($connection,"SELECT tbl_produk.id_produk, tbl_kasir.nama_kasir, tbl_produk.nama_produk, tbl_kategori.nama_kategori, tbl_produk.price_produk FROM tbl_kasir, tbl_produk, tbl_kategori WHERE tbl_produk.id_kategori=tbl_kategori.id_kategori AND tbl_produk.id_kasir=tbl_kasir.id_kasir");


import kedalam PHPMYADMIN terlebih dahulu databasenya yang bernama penjualan.sql

jalankan aplikasi dengan alamat URL : http://localhost/arkademy/index.php