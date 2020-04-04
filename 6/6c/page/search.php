<?php
  $result = $_GET['search'];
  $query = "SELECT product.id as id, cashier.name as cashier, product.name as product, category.name as category, product.price as price FROM product JOIN category ON product.id_category = category.id JOIN cashier ON product.id_cashier=cashier.id WHERE product.name LIKE '%$result%' OR cashier.name LIKE '%$result%' OR category.name LIKE '%$result%'";
 ?>
<section>
  <div class="container mt-5">
  <h2 class="lead mt-4">Hasil Pencarian <b><?php echo $_GET['search'] ?></b> :</h2>
  <table class="table table-borderless shadow text-center" align="center">
    <thead class="orange">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Cashier</th>
        <th scope="col">Product</th>
        <th scope="col">Category</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $number = 1;
        $showData = query($query);
        $jml = mysqli_num_rows($showData);
        if ($jml < 1) { ?>
          <tr>
            <td colspan="6">Tidak Ada Data</td>
          </tr>
        <?php }else{
        while ($show = mysqli_fetch_array($showData)) { ?>
      <tr>
        <th scope="row"><?php echo $number; ?></th>
        <td><?php echo $show['cashier'] ?></td>
        <td><?php echo $show['product'] ?></td>
        <td><?php echo $show['category'] ?></td>
        <td><?php echo $show['price'] ?></td>
        <td>
          <a href="" class="edit-data" data-toggle="modal" data-target="#edit-<?php echo $show['id'] ?>"><i class="fa fa-edit text-orange"></i></a>
          &nbsp;
          <a href="" onclick="return deleteData(<?php echo $show['id'] ?>)" class="hapus-data"><i class="fa fa-trash text-danger"></i></a>
        </td>
      </tr>
    <?php $number++; } } ?>
    </tbody>
  </table>
  </div>
</section>
