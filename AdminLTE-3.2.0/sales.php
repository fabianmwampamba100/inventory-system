<?php include 'db.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Radio Inventory | Sales</title>
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
          <li class="nav-item"><a href="sales.php" class="nav-link active"><i class="nav-icon fas fa-dollar-sign"></i><p>sales</p></a></li>
          <li class="nav-item"><a href="sale_items.php" class="nav-link"><i class="nav-icon fas fa-list"></i><p>sale items</p></a></li>
          <li class="nav-item"><a href="purchase_items.php" class="nav-link"><i class="nav-icon fas fa-list"></i><p>purchases items</p></a></li>
          <li class="nav-item"><a href="users.php" class="nav-link"><i class="nav-icon fas fa-user-shield"></i><p>users</p></a></li>
        </ul>
      </nav>
    </div>
  </aside>





  

  <div class="content-wrapper">
    <div class="content-header"><div class="container-fluid"><div class="row mb-2"><div class="col-sm-6"><h1>Sales (Mauzo)</h1></div><div class="col-sm-6"><ol class="breadcrumb float-sm-right"><li class="breadcrumb-item"><a href="index.php">Home</a></li><li class="breadcrumb-item active">Sales</li></ol></div></div></div></div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3"><div class="info-box"><span class="info-box-icon bg-success elevation-1"><i class="fas fa-dollar-sign"></i></span><div class="info-box-content"><span class="info-box-text">Today Sales</span><span class="info-box-number">850,000 TZS</span></div></div></div>
          <div class="col-12 col-sm-6 col-md-3"><div class="info-box"><span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-bag"></i></span><div class="info-box-content"><span class="info-box-text">Total Sales</span><span class="info-box-number">45</span></div></div></div>
        </div>

        <div class="card">
          <div class="card-header"><h3 class="card-title">Sales Orders</h3><button class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#addSale"><i class="fas fa-plus"></i> New Sale</button></div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead><tr><th>Sale ID</th><th>Customer</th><th>Date</th><th>Total Amount</th><th>Paid By</th><th>Status</th><th>Action</th></tr></thead>
              <tbody>
                <tr><td>SALE-001</td><td>John Mwakasege</td><td>2026-10-16</td><td>450,000 TZS</td><td>M-Pesa</td><td><span class="badge bg-success">Completed</span></td><td><button class="btn btn-primary btn-xs">View Items</button> <button class="btn btn-secondary btn-xs">Invoice</button></td></tr>
                <tr><td>SALE-002</td><td>Security Company Ltd</td><td>2026-10-15</td><td>1,200,000 TZS</td><td>Bank</td><td><span class="badge bg-success">Completed</span></td><td><button class="btn btn-primary btn-xs">View Items</button> <button class="btn btn-secondary btn-xs">Invoice</button></td></tr>
                <tr><td>SALE-003</td><td>Ahmed Ali</td><td>2026-10-17</td><td>85,000 TZS</td><td>Cash</td><td><span class="badge bg-warning">Pending</span></td><td><button class="btn btn-primary btn-xs">View Items</button> <button class="btn btn-secondary btn-xs">Invoice</button></td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="addSale"><div class="modal-dialog modal-lg"><div class="modal-content">
      <div class="modal-header bg-success"><h4 class="modal-title">New Sale</h4><button type="button" class="close" data-dismiss="modal">&times;</button></div>
      <div class="modal-body">
        <div class="row"><div class="col-6"><div class="form-group"><label>Customer</label><select class="form-control"><option>John Mwakasege</option><option>Security Company Ltd</option><option>Walk-in Customer</option></select></div></div><div class="col-6"><div class="form-group"><label>Sale Date</label><input type="date" class="form-control" value="2026-10-17"></div></div></div>
        <table class="table table-sm"><thead><tr><th>Product</th><th>Qty</th><th>Price</th></tr></thead><tbody><tr><td><select class="form-control"><option>Baofeng UV-5R - Stock 15</option><option>Icom IC-2300H - Stock 5</option></select></td><td><input type="number" class="form-control" value="1"></td><td><input type="number" class="form-control" value="85000"></td></tr></tbody></table>
        <button class="btn btn-sm btn-secondary">+ Add Product</button>
        <div class="row mt-3"><div class="col-6"><div class="form-group"><label>Payment Method</label><select class="form-control"><option>Cash</option><option>M-Pesa</option><option>Tigo Pesa</option><option>Bank Transfer</option></select></div></div><div class="col-6"><div class="form-group"><label>Total Amount</label><input type="text" class="form-control" value="85,000" readonly></div></div></div>
      </div>
      <div class="modal-footer"><button class="btn btn-default" data-dismiss="modal">Close</button><button class="btn btn-success">Complete Sale</button></div>
    </div></div></div>

  </div>
  <footer class="main-footer"><strong>Radio Inventory System</strong></footer>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>

