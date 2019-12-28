<?php require_once 'templates/header.php';
require_once('config/koneksidb.php');

// Query Yang Seperti Di Soal
$query = mysqli_query($connection,"SELECT * FROM tbl_transaksi ORDER BY id_transaksi asc");

?>

<?php

if (isset($_POST['tambahdata']) && $_POST['tambahdata'] == "Tambah" ) {

$nama_kasir = $_POST['nama_kasir'];
$nama_produk = $_POST['nama_produk'];
$nama_kategori = $_POST['nama_kategori'];
$price_produk = $_POST['price_produk'];
	
//menyimpan data inputan ke database
	$queryinsert = "INSERT INTO tbl_transaksi (nama_kasir, nama_produk, nama_kategori, price_produk) VALUES ('$nama_kasir', '$nama_produk', '$nama_kategori', '$price_produk')";
    
		if(mysqli_query($connection, $queryinsert)){
			echo "<script>alert('Tambah Data Berhasil')</script>";
			header("Location: ?>page=../index.php");


		}else{
			echo "<script>alert('Tambah Data Gagal')</script>";
		}

}
?>

<div class="container mt-5">
	<table class="table">
	  <thead class="thead-light">
	    
	    <tr>
			<th align="center">No.</th>
			<th align="center">Cashier</th>
			<th align="center">Product</th>
			<th align="center">Category</th>
			<th align="center">Price</th>
			<th align="center">Action</th>
		</tr>
	   
	  </thead>
	  <?php if(mysqli_num_rows($query)>0){ ?>
	      <?php
	         $no = 1;
	         while($data = mysqli_fetch_array($query)){
	       ?>
	  <tbody>
	    <tr>
	      <td><?php echo $no ?></td>
	      <td><?php echo $data["nama_kasir"];?></td>
	      <td><?php echo $data["nama_produk"];?></td>
	      <td><?php echo $data["nama_kategori"];?></td>
	      <td><?php echo $data["price_produk"];?></td>

	      <td>

	    	<a  href="viewedit.php?id=<?php echo $data['id_transaksi'];?>">Edit</a>
	        |
	        <a href="proses/delete.php?id=<?php echo $data['id_transaksi'];?>">
	        Hapus
	      	</a> 
	   		</td>
	    </tr>
	  </tbody>
	  <?php $no++; } ?>
    	<?php } ?>
	</table>
</div>

<!-- Modal Inputan Data -->
<div id="tambahdata" class="modal fade" role="dialog">
	<div class="modal-dialog" style="width:1000px ">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">ADD</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				
			</div>

<!-- form inputan data dengan modal/pop up -->					
		<form action="" method="POST" enctype="multipart/form-data">
            <div class="modal-body">

              <div class="form-group">
                <label class="control-label" for="nama_kasir">Cashier</label>
                <input type="text" placeholder="Raisa Andriana" name="nama_kasir" class="form-control" id="nama_kasir" required>
              </div> 

              <div class="form-group">
                <label class="control-label" for="nama_produk">Order</label>
                <input type="text" placeholder="Ice Tea" name="nama_produk" class="form-control" id="nama_produk" required>
              </div>

              <div class="form-group">
                <label class="control-label" for="nama_kategori">Category</label>
                <input type="text" placeholder="Drink" name="nama_kategori" class="form-control" id="nama_kategori" required>
              </div>

               <div class="form-group">
                <label class="control-label" for="price_produk">Price</label>
                <input type="text" placeholder="10.000" name="price_produk" class="form-control" id="price_produk" required>
              </div>


            </div>

            <div class="modal-footer">
              <button type="reset" class="btn btn-danger">Reset</button>
              <input type="submit" class="btn btn-success" name="tambahdata" value="Tambah">
            </div>
		</form>

		</div>
	</div>
</div>


<?php

require_once 'templates/footer.php';

?>