<!-- Modal ADD -->
<div class="modal fade" id="add">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="addLabel">ADD</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label>Cashier :</label>
            <select class="form-control" name="cashier">
              <option selected disabled>Select Cashiher</option>
              <?php
                $queryCashier = query("SELECT*FROM cashier");
                while ($row = mysqli_fetch_array($queryCashier)) { ?>
                  <option value="<?php echo $row['id'] ?>">
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
                  <option value="<?php echo $row['id'] ?>">
                    <?php echo $row['name'] ?>
                  </option>
                  <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Your Food/Drink ? </label>
            <input type="text" name="product" class="form-control" placeholder="Insert Your Food/Drink" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Price :</label>
            <input type="number" name="price" class="form-control" placeholder="Rp. 100.000" autocomplete="off">
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn orange btn-add" name="proses" value="tambah">ADD</button>
      </div>
    </form>
    </div>
  </div>
</div>
