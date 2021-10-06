<?php
require 'config.php';
$products = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
   <div class="container-fluid">
      <div class="row">
            <table class="table table-striped table-bordered">
      <tr class='table-active'>
         <th>Product Name</th>
         <th>Price</th>
         <th>Stock</th>
         <th>Total</th>
         <th>Aksi</th>
      </tr>
      <?php foreach ($products as $product): ?>
         <tr>
            <td><?=$product['products_name'];?></td>
            <td><?=rupiah($product['price']);?></td>
            <td><?=$product['stock'];?></td>
            <td><?=rupiah(total($product['price'], $product['stock']))?></td>
            <td><a href="" class="btn btn-warning">Edit</a> <a href="" class="btn btn-danger">Hapus</a></td>
         </tr>
         <?php $total[] = total($product['price'], $product['stock']);?>
         <?php $subtotal = array_sum($total)?>
      <?php endforeach;?>
   </table>
   <h3>Sub Total : <?=rupiah($subtotal);?> <h3/>
      </div>
   </div>


   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>