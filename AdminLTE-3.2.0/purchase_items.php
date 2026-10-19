<?php 
include 'db.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Radio Inventory | Purchase Items</title>
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
          <li class="nav-item"><a href="sale_items.php" class="nav-link"><i class="nav-icon fas fa-list"></i><p>sale items</p></a></li>
          <li class="nav-item"><a href="purchase_items.php" class="nav-link active"><i class="nav-icon fas fa-list"></i><p>purchases items</p></a></li>
          <li class="nav-item"><a href="users.php" class="nav-link"><i class="nav-icon fas fa-user-shield"></i><p>users</p></a></li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <div class="content-header"><div class="container-fluid"><div class="row mb-2"><div class="col-sm-6"><h1>Purchase Items Detail</h1></div><div class="col-sm-6"><ol class="breadcrumb float-sm-right"><li class="breadcrumb-item"><a href="index.php">Home</a></li><li class="breadcrumb-item active">Purchase Items</li></ol></div></div></div></div>

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header"><h3 class="card-title">All Products Purchased - Stock In History (JOIN ya purchases + products)</h3></div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead><tr><th>Item ID</th><th>Purchase ID</th><th>Supplier</th><th>Product Name</th><th>Qty Purchased</th><th>Unit Cost</th><th>Subtotal</th><th>Date</th></tr></thead>
              <tbody>
                <tr><td>1</td><td>PUR-001</td><td>Dar Electronics Ltd</td><td>Baofeng UV-5R</td><td>15</td><td>65,000</td><td>975,000</td><td>2026-10-15</td></tr>
                <tr><td>2</td><td>PUR-001</td><td>Dar Electronics Ltd</td><td>Battery BL-5C</td><td>20</td><td>10,000</td><td>200,000</td><td>2026-10-15</td></tr>
                <tr><td>3</td><td>PUR-002</td><td>Icom Tanzania</td><td>Icom IC-2300H</td><td>5</td><td>350,000</td><td>1,750,000</td><td>2026-10-10</td></tr>
                <tr><td>4</td><td>PUR-002</td><td>Icom Tanzania</td><td>Antenna Nagoya 771</td><td>10</td><td>12,000</td><td>120,000</td><td>2026-10-10</td></tr>
                <tr><td>5</td><td>PUR-003</td><td>Kenwood East Africa</td><td>Kenwood TK-2000</td><td>8</td><td>95,000</td><td>760,000</td><td>2026-10-08</td></tr>
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
