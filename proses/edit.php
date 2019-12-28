 <?php 
// koneksi database
require_once('../config/koneksidb.php');

// menangkap data yang di kirim dari form
$id = $_POST['id_transaksi'];
$nama_kasir = $_POST['nama_kasir'];
$nama_produk = $_POST['nama_produk'];
$nama_kategori = $_POST['nama_kategori'];
$price_produk = $_POST['price_produk'];


  $query = mysqli_query($connection,"UPDATE tbl_transaksi SET nama_kasir='$nama_kasir', nama_produk='$nama_produk', nama_kategori='$nama_kategori', price_produk = '$price_produk' WHERE id_transaksi='$id'");

      if(mysqli_query($connection, $query)){
         echo "<script>alert('Update data Gagal')</script>";
      }else{
          
           header("location:../index.php");
      }

          



?>