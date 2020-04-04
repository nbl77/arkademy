<?php
  $conn = mysqli_connect("localhost","root","","arkademy");
  function query($query){
    global $conn;
    return mysqli_query($conn,$query);
  }
  $query = "SELECT product.id as id, cashier.name as cashier, product.name as product, category.name as category, product.price as price FROM product JOIN category ON product.id_category = category.id JOIN cashier ON product.id_cashier=cashier.id";
  require_once 'proses/app.php';
  require 'page/header.php';
  require 'page/alert.php';
  require 'page/modal_add.php';
  require 'page/modal_edit.php';
  if (isset($_GET['search'])) {
    require 'page/search.php';
  }else{
    require 'page/main.php';
  }
  require 'page/footer.php';
