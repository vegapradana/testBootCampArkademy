<?php require_once 'templates/header.php';
require_once('config/koneksidb.php');
$id = $_GET['id'];
$query = mysqli_query($connection,"SELECT * FROM tbl_transaksi WHERE id_transaksi = '$id'");
$data = mysqli_fetch_array($query);
?>
<!-- form Edit data dengan modal/pop up -->					
<div class="container">		

        <form id="formedit" method="post" action="proses/edit.php" enctype="multipart/form-data">
            <div class="modal-body" id="modal-edit">
          
              <div class="form-group">
                
                <input type="hidden" name="id_transaksi" class="form-control" id="id_transaksi" value="<?php echo $data["id_transaksi"];?>" required>
              </div>

              <div class="form-group">
                <label class="control-label" for="nama_kasir">Cashier</label>
                <input type="text" name="nama_kasir" class="form-control" id="nama_kasir" value="<?php echo $data["nama_kasir"];?>" required>
              </div>

              <div class="form-group">
                <label class="control-label" for="nama_produk">Order</label>
                <input type="text" name="nama_produk" class="form-control" id="nama_produk" value="<?php echo $data["nama_produk"];?>" required>
              </div> 

              <div class="form-group">
                <label class="control-label" for="nama_kategori">Category</label>
                <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" value="<?php echo $data["nama_kategori"];?>" required>
              </div>

              <div class="form-group">
                <label class="control-label" for="price_produk">Price</label>
                <input type="text" name="price_produk" class="form-control" id="price_produk" value="<?php echo $data["price_produk"];?>" required>
              </div>


            <div class="modal-footer">
            
              <input type="submit" class="btn btn-success" id="edtpost" name="edtpost" value="Simpan">
              
            </div>
          </form>

  </div>

<?php
require_once 'templates/footer.php';
?>