<?php
if (isset($_GET['proses'])) {
  if ($_GET['proses'] == 'hapus') {
    $id = $_GET['id'];
    $del = query("DELETE FROM product WHERE id='$id'");
    if ($del) {
      header("location: index.php?hapus=success&&id=$id");
    }else{
      header("location: index.php?hapus=failed&&id=$id");
    }
  }
}elseif(isset($_POST['proses'])){
  $proses = $_POST['proses'];
  $kasir = $_POST['cashier'];
  $kategori = $_POST['category'];
  $produk = $_POST['product'];
  $harga = $_POST['price'];
  if ($proses == "tambah") {
    $tambah_data = query("INSERT INTO product VALUES('','$produk','$harga','$kategori','$kasir')");
    if ($tambah_data) {
      header("location: index.php?add=success&&id=$produk");
    }else{
      header("location: index.php?add=failed&&id=$produk");
    }
  }elseif($proses == "edit"){
    $edit = query("UPDATE product SET name='$produk',price='$harga',id_category='$kategori',id_cashier='$kasir'");
    if ($edit) {
      header("location: index.php?edit=success&&id=$produk");
    }else{
      header("location: index.php?edit=failed&&id=$produk");
    }
  }
}
