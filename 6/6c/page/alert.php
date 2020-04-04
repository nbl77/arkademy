<?php
if (isset($_GET['hapus'])) {
  $id = $_GET['id'];
  if ($_GET['hapus'] == 'success') { ?>
    <script type="text/javascript">
    Swal.fire({
      title: 'Berhasil Menghapus',
      text: 'Data Dengan ID #<?php echo $id ?> Berhasil Di Hapus',
      icon: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK'
      }).then((result) => {
      if (result.value) {
        window.location = "index.php";
      }
    });
    </script>
  <?php }else{ ?>
    <script type="text/javascript">
    Swal.fire({
      title: 'Gagak Menghapus',
      text: 'Data Dengan ID #<?php echo $id ?> Gagal Di Hapus',
      icon: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK'
      }).then((result) => {
      if (result.value) {
        window.location = "index.php";
      }
    });
    </script>
  <?php }
}elseif(isset($_GET['add'])){
  $id = $_GET['id'];
  if ($_GET['add'] == 'success') {
    ?>
    <script type="text/javascript">
    Swal.fire({
      title: 'Berhasil Menambah Data',
      text: 'Produk #<?php echo $id ?> Berhasil Di Tambah',
      icon: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK'
      }).then((result) => {
      if (result.value) {
        window.location = "index.php";
      }
    });
    </script>
    <?php
  }else{
    ?>
    <script type="text/javascript">
    Swal.fire({
      title: 'Gagal Menambah Data',
      text: 'Produk #<?php echo $id ?> Gagal Di Tambah',
      icon: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK'
      }).then((result) => {
      if (result.value) {
        window.location = "index.php";
      }
    });
    </script>
    <?php
  }
}elseif(isset($_GET['edit'])){
  $id = $_GET['id'];
  if ($_GET['edit'] == 'success') {
    ?>
    <script type="text/javascript">
    Swal.fire({
      title: 'Berhasil Meerubah Data',
      text: 'Produk #<?php echo $id ?> Berhasil Di Rubah',
      icon: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK'
      }).then((result) => {
      if (result.value) {
        window.location = "index.php";
      }
    });
    </script>
    <?php
  }else{
    ?>
    <script type="text/javascript">
    Swal.fire({
      title: 'Gagal Merubah Data',
      text: 'Produk #<?php echo $id ?> Gagal Di Rubah',
      icon: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK'
      }).then((result) => {
      if (result.value) {
        window.location = "index.php";
      }
    });
    </script>
    <?php
  }
}
