<!-- Modal EDIT -->
<?php
$showData = query($query);
while($showModal = mysqli_fetch_array($showData)){
$id = $showModal['id'];
?>
<div class="modal fade" id="edit-<?php echo $showModal['id'] ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="" method="post">
      <div class="modal-header">
        <h5 class="modal-title">EDIT</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <div class="form-group">
            <label>Cashier :</label>
            <select class="form-control" name="cashier">
              <option selected disabled>Select Cashiher</option>
              <?php
                $queryCashier = query("SELECT*FROM cashier");
                while ($row = mysqli_fetch_array($queryCashier)) { ?>
                  <option value="<?php echo $row['id'] ?>" <?php if($row['name'] == $showModal['cashier']) echo "selected" ?> >
                    <?php echo $row['name'] ?>
                  </option>
                  <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Category :</label>
            <select class="form-control" name="category">
              <option selected disabled>Select Category</option>
              <?php
                $queryCategory = query("SELECT*FROM category");
                while ($row = mysqli_fetch_array($queryCategory)) { ?>

                  <option value="<?php echo $row['id'] ?>" <?php if($row['name'] == $showModal['category']) echo "selected" ?> >
                    <?php echo $row['name'] ?>
                  </option>
                  <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Your Food/Drink ?</label>
            <input type="text" name="product" class="form-control" placeholder="Insert Food/Drink" autocomplete="off" value="<?php echo $showModal['product'] ?>">
          </div>
          <div class="form-group">
            <label>Price :</label>
            <input type="number" name="price" class="form-control" placeholder="Rp. 100.000" autocomplete="off" value="<?php echo $showModal['price'] ?>">
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="proses" value="edit" class="btn orange btn-add">EDIT</button>
      </div>
    </form>
    </div>
  </div>
</div>
<?php } ?>
