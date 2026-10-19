<?php
include 'db.php';
if(!isset($conn) && isset($con)) $conn = $con;

// 1. SOMA STRUCTURE YA TABLE YAKO HALISI
$existing_cols = [];
$res = $conn->query("SHOW COLUMNS FROM products");
while($r = $res->fetch_assoc()){ $existing_cols[] = $r['Field']; }

function findCol($possibles, $existing){
    foreach($possibles as $p){ if(in_array($p, $existing)) return $p; }
    return null;
}

// Tafuta majina halisi
$col_name = findCol(['product_name','name','p_name','prod_name','product'], $existing_cols);
$col_cat  = findCol(['category_id','cat_id','category'], $existing_cols);
$col_qty  = findCol(['quantity','qty','stock','product_quantity','stock_qty'], $existing_cols);
$col_price = findCol(['price','unit_price','product_price','selling_price','retail_price','buying_price','cost','amount'], $existing_cols);
$col_id = findCol(['product_id','id','p_id'], $existing_cols);

// 2. ADD PRODUCT
if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['product_name'])){
    $fields = []; $values = []; $types = ""; $params = [];
    
    if($col_name){ $fields[] = $col_name; $values[] = "?"; $types.="s"; $params[] = trim($_POST['product_name']); }
    if($col_cat){ $fields[] = $col_cat; $values[] = "?"; $types.="i"; $params[] = intval($_POST['category_id']); }
    if($col_qty){ $fields[] = $col_qty; $values[] = "?"; $types.="i"; $params[] = intval($_POST['qty']); }
    if($col_price){ $fields[] = $col_price; $values[] = "?"; $types.="d"; $params[] = floatval($_POST['price']); }

    if(!empty($fields)){
        $sql = "INSERT INTO products (".implode(",", $fields).") VALUES (".implode(",", $values).")";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param($types, ...$params);
        $stmt->execute();
    }
    header("Location: products.php"); exit();
}

// 3. DELETE
if(isset($_GET['delete']) && $col_id){
    $conn->query("DELETE FROM products WHERE $col_id = ".intval($_GET['delete']));
    header("Location: products.php"); exit();
}

$cats = $conn->query("SELECT * FROM categories");
$products = $conn->query("SELECT p.*, c.category_name FROM products p LEFT JOIN categories c ON p.category_id=c.category_id ORDER BY p.product_id DESC");
?>
<!DOCTYPE html><html><head><title>Radio Inventory | Products</title><link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"><link rel="stylesheet" href="dist/css/adminlte.min.css"></head>
<body class="hold-transition sidebar-mini layout-fixed"><div class="wrapper">
<nav class="main-header navbar navbar-white navbar-light"><ul class="navbar-nav"><li class="nav-item"><a class="nav-link" data-widget="pushmenu"><i class="fas fa-bars"></i></a></li></ul></nav>
<!-- <aside class="main-sidebar sidebar-dark-primary elevation-4"><a href="#" class="brand-link"><span class="brand-text">Radio Inventory</span></a><div class="sidebar"><nav class="mt-2"><ul class="nav nav-pills nav-sidebar flex-column">
<li class="nav-item"><a href="products.php" class="nav-link active"><i class="nav-icon fas fa-box"></i><p>Our products</p></a></li>
<li class="nav-item"><a href="categories.php" class="nav-link"><i class="nav-icon fas fa-tags"></i><p>categories</p></a></li>
<li class="nav-item"><a href="suppliers.php" class="nav-link"><i class="nav-icon fas fa-truck"></i><p>suppliers</p></a></li>
<li class="nav-item"><a href="purchases.php" class="nav-link"><i class="nav-icon fas fa-shopping-cart"></i><p>purchases</p></a></li>
</ul></nav></div></aside> -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index.php" class="brand-link"><span class="brand-text font-weight-light">Radio Inventory</span></a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          <li class="nav-item"><a href="index.php" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>My Dashboard</p></a></li>
          <li class="nav-item"><a href="products.php" class="nav-link"><i class="nav-icon fas fa-box"></i><p>Our products</p></a></li>
          <li class="nav-item"><a href="categories.php" class="nav-link"><i class="nav-icon fas fa-tags"></i><p>categories</p></a></li>
          <li class="nav-item"><a href="suppliers.php" class="nav-link"><i class="nav-icon fas fa-truck"></i><p>suppliers</p></a></li>
          <li class="nav-item"><a href="purchases.php" class="nav-link active"><i class="nav-icon fas fa-shopping-cart"></i><p>purchases</p></a></li>
          <li class="nav-item"><a href="customers.php" class="nav-link"><i class="nav-icon fas fa-users"></i><p>customers</p></a></li>
          <li class="nav-item"><a href="sales.php" class="nav-link"><i class="nav-icon fas fa-dollar-sign"></i><p>sales</p></a></li>
          <li class="nav-item"><a href="sale_items.php" class="nav-link"><i class="nav-icon fas fa-list"></i><p>sale items</p></a></li>
          <li class="nav-item"><a href="purchase_items.php" class="nav-link"><i class="nav-icon fas fa-list"></i><p>purchases items</p></a></li>
          <li class="nav-item"><a href="users.php" class="nav-link"><i class="nav-icon fas fa-user-shield"></i><p>users</p></a></li>
        </ul>
      </nav>
    </div>
  </aside>


<div class="content-wrapper"><div class="content-header"><div class="container-fluid"><h1>Our Products</h1></div></div>
<section class="content"><div class="container-fluid"><div class="card"><div class="card-header"><h3 class="card-title">List of Radio Products</h3><div class="card-tools"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add Product</button></div></div>
<div class="card-body">
<p style="font-size:12px;color:#666;">Imebaini columns zako: <?= implode(", ", $existing_cols) ?></p>
<table class="table table-bordered"><thead><tr><th>ID</th><th>Product Name</th><th>Category</th><th>Price</th><th>Qty</th><th>Status</th><th>Action</th></tr></thead><tbody>
<?php while($r=$products->fetch_assoc()): 
$qty_val = $r[$col_qty] ?? $r['quantity'] ?? $r['qty'] ?? 0;
$price_val = $r[$col_price] ?? 0;
?>
<tr><td><?= $r[$col_id] ?? $r['product_id'] ?></td><td><?= htmlspecialchars($r[$col_name] ?? $r['product_name'] ?? '-') ?></td><td><?= htmlspecialchars($r['category_name'] ?? '-') ?></td><td><?= number_format($price_val) ?></td><td><?= $qty_val ?></td><td><?= $qty_val <= 10 ? '<span class="badge badge-warning">Low</span>' : '<span class="badge badge-success">In Stock</span>' ?></td><td><a href="?delete=<?= $r[$col_id] ?? $r['product_id'] ?>" class="btn btn-danger btn-xs">Delete</a></td></tr>
<?php endwhile;?>
</tbody></table></div></div></div></section></div>
<div class="modal fade" id="addModal"><div class="modal-dialog"><div class="modal-content"><form method="POST"><div class="modal-header"><h5>Add Product</h5><button type="button" class="close" data-dismiss="modal">&times;</button></div>
<div class="modal-body">
<div class="form-group"><label>Product Name *</label><input type="text" name="product_name" class="form-control" required></div>
<div class="form-group"><label>Category *</label><select name="category_id" class="form-control" required><option value="">-- Chagua --</option><?php $cats->data_seek(0); while($c=$cats->fetch_assoc()):?><option value="<?=$c['category_id']?>"><?=$c['category_name']?></option><?php endwhile;?></select></div>
<div class="row"><div class="col-6"><label>Price *</label><input type="number" step="0.01" name="price" class="form-control" required></div><div class="col-6"><label>Qty *</label><input type="number" name="qty" class="form-control" required></div></div>
</div><div class="modal-footer"><button type="submit" class="btn btn-primary">Save</button></div></form></div></div></div>
</div><script src="plugins/jquery/jquery.min.js"></script><script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script><script src="dist/js/adminlte.min.js"></script></body></html>

