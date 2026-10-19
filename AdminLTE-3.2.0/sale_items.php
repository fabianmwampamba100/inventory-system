<?php 
include 'db.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Radio Inventory | Sale Items</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light"><ul class="navbar-nav"><li class="nav-item"><a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a></li></ul></nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index.php" class="brand-link"><span class="brand-text font-weight-light">Radio Inventory</span></a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          <li class="nav-item"><a href="index.php" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>My Dashboard</p></a></li>
          <li class="nav-item"><a href="products.php" class="nav-link"><i class="nav-icon fas fa-box"></i><p>Our products</p></a></li>
          <li class="nav-item"><a href="categories.php" class="nav-link"><i class="nav-icon fas fa-tags"></i><p>categories</p></a></li>
          <li class="nav-item"><a href="suppliers.php" class="nav-link"><i class="nav-icon fas fa-truck"></i><p>suppliers</p></a></li>
          <li class="nav-item"><a href="purchases.php" class="nav-link"><i class="nav-icon fas fa-shopping-cart"></i><p>purchases</p></a></li>
          <li class="nav-item"><a href="customers.php" class="nav-link"><i class="nav-icon fas fa-users"></i><p>customers</p></a></li>
          <li class="nav-item"><a href="sales.php" class="nav-link"><i class="nav-icon fas fa-dollar-sign"></i><p>sales</p></a></li>
          <li class="nav-item"><a href="sale_items.php" class="nav-link active"><i class="nav-icon fas fa-list"></i><p>sale items</p></a></li>
          <li class="nav-item"><a href="purchase_items.php" class="nav-link"><i class="nav-icon fas fa-list"></i><p>purchases items</p></a></li>
          <li class="nav-item"><a href="users.php" class="nav-link"><i class="nav-icon fas fa-user-shield"></i><p>users</p></a></li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <div class="content-header"><div class="container-fluid"><div class="row mb-2"><div class="col-sm-6"><h1>Sale Items Detail</h1></div><div class="col-sm-6"><ol class="breadcrumb float-sm-right"><li class="breadcrumb-item"><a href="index.php">Home</a></li><li class="breadcrumb-item active">Sale Items</li></ol></div></div></div></div>

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header"><h3 class="card-title">All Products Sold - Detailed List (JOIN ya sales + products)</h3></div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead><tr><th>Item ID</th><th>Sale ID</th><th>Customer</th><th>Product Name</th><th>Qty Sold</th><th>Unit Price</th><th>Subtotal</th><th>Date</th></tr></thead>
              <tbody>
                <tr><td>1</td><td>SALE-001</td><td>John Mwakasege</td><td>Baofeng UV-5R</td><td>3</td><td>85,000</td><td>255,000</td><td>2026-10-16</td></tr>
                <tr><td>2</td><td>SALE-001</td><td>John Mwakasege</td><td>Battery BL-5C</td><td>3</td><td>15,000</td><td>45,000</td><td>2026-10-16</td></tr>
                <tr><td>3</td><td>SALE-002</td><td>Security Ltd</td><td>Icom IC-2300H</td><td>2</td><td>450,000</td><td>900,000</td><td>2026-10-15</td></tr>
                <tr><td>4</td><td>SALE-002</td><td>Security Ltd</td><td>Antenna Nagoya 771</td><td>5</td><td>15,000</td><td>75,000</td><td>2026-10-15</td></tr>
                <tr><td>5</td><td>SALE-003</td><td>Ahmed Ali</td><td>Baofeng UV-5R</td><td>1</td><td>85,000</td><td>85,000</td><td>2026-10-17</td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="main-footer"><strong>Radio Inventory System</strong></footer>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
