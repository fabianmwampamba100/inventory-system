<?php 
include 'db.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Radio Inventory | Suppliers</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a></li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index.php" class="brand-link"><span class="brand-text font-weight-light">Radio Inventory</span></a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          <li class="nav-item"><a href="index.php" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>My Dashboard</p></a></li>
          <li class="nav-item"><a href="products.php" class="nav-link"><i class="nav-icon fas fa-box"></i><p>Our products</p></a></li>
          <li class="nav-item"><a href="categories.php" class="nav-link"><i class="nav-icon fas fa-tags"></i><p>categories</p></a></li>
          <li class="nav-item"><a href="suppliers.php" class="nav-link active"><i class="nav-icon fas fa-truck"></i><p>suppliers</p></a></li>
          <li class="nav-item"><a href="purchases.php" class="nav-link"><i class="nav-icon fas fa-shopping-cart"></i><p>purchases</p></a></li>
          <li class="nav-item"><a href="customers.php" class="nav-link"><i class="nav-icon fas fa-users"></i><p>customers</p></a></li>
          <li class="nav-item"><a href="sales.php" class="nav-link"><i class="nav-icon fas fa-dollar-sign"></i><p>sales</p></a></li>
          <li class="nav-item"><a href="sale_items.php" class="nav-link"><i class="nav-icon fas fa-list"></i><p>sale items</p></a></li>
          <li class="nav-item"><a href="purchase_items.php" class="nav-link"><i class="nav-icon fas fa-list"></i><p>purchases items</p></a></li>
          <li class="nav-item"><a href="users.php" class="nav-link"><i class="nav-icon fas fa-user-shield"></i><p>users</p></a></li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"><h1>Suppliers</h1></div>
          <div class="col-sm-6"><ol class="breadcrumb float-sm-right"><li class="breadcrumb-item"><a href="index.php">Home</a></li><li class="breadcrumb-item active">Suppliers</li></ol></div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Suppliers List</h3>
            <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#addSupplier"><i class="fas fa-plus"></i> Add Supplier</button>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead><tr><th>ID</th><th>Supplier Name</th><th>Contact Person</th><th>Phone</th><th>Email</th><th>Address</th><th>Action</th></tr></thead>
              <tbody>
                <tr><td>1</td><td>Dar Electronics Ltd</td><td>Juma Hassan</td><td>0712345678</td><td>info@darelectronics.co.tz</td><td>Kariakoo, Dar</td><td><button class="btn btn-info btn-xs">Edit</button> <button class="btn btn-danger btn-xs">Delete</button></td></tr>
                <tr><td>2</td><td>Icom Tanzania</td><td>Sarah Kim</td><td>0755123456</td><td>sarah@icom.co.tz</td><td>Masaki, Dar</td><td><button class="btn btn-info btn-xs">Edit</button> <button class="btn btn-danger btn-xs">Delete</button></td></tr>
                <tr><td>3</td><td>Kenwood East Africa</td><td>Peter Mwangi</td><td>0788765432</td><td>peter@kenwood.co.ke</td><td>Nairobi</td><td><button class="btn btn-info btn-xs">Edit</button> <button class="btn btn-danger btn-xs">Delete</button></td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="addSupplier">
      <div class="modal-dialog"><div class="modal-content">
        <div class="modal-header bg-primary"><h4 class="modal-title">Add Supplier</h4><button type="button" class="close" data-dismiss="modal">&times;</button></div>
        <div class="modal-body">
          <div class="form-group"><label>Supplier Company Name</label><input type="text" class="form-control"></div>
          <div class="form-group"><label>Contact Person</label><input type="text" class="form-control"></div>
          <div class="row"><div class="col-6"><div class="form-group"><label>Phone</label><input type="text" class="form-control"></div></div><div class="col-6"><div class="form-group"><label>Email</label><input type="email" class="form-control"></div></div></div>
          <div class="form-group"><label>Address</label><input type="text" class="form-control"></div>
        </div>
        <div class="modal-footer"><button class="btn btn-default" data-dismiss="modal">Close</button><button class="btn btn-primary">Save Supplier</button></div>
      </div></div>
    </div>

  </div>

  <footer class="main-footer"><strong>Radio Inventory System</strong></footer>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
