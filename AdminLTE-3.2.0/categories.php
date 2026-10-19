 <?php
include 'db.php';
// Fix kama connection inaitwa $con badala ya $conn
if(!isset($conn) && isset($con)){ $conn = $con; }

// 1. ADD CATEGORY - Inafanya kazi kwa button yoyote
if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['category_name'])){
    $category_name = trim($_POST['category_name']);
    $description = trim($_POST['description'] ?? '');

    $stmt = $conn->prepare("INSERT INTO categories (category_name, description) VALUES (?, ?)");
    $stmt->bind_param("ss", $category_name, $description);
    $stmt->execute();
    $stmt->close();

    header("Location: categories.php?success=1");
    exit();
}

// 2. DELETE CATEGORY
if(isset($_GET['delete'])){
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM categories WHERE category_id = $id");
    header("Location: categories.php");
    exit();
}

$result = $conn->query("SELECT * FROM categories ORDER BY category_id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Radio Inventory | Categories</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a></li>
    </ul>


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




  </nav>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <h1>Categories</h1>
      </div>
    </section>


    


    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
              <i class="fa fa-plus"></i> Add Category
            </button>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Category Name</th>
                  <th>Description</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                  <td><?= $row['category_id'] ?></td>
                  <td><?= htmlspecialchars($row['category_name']) ?></td>
                  <td><?= htmlspecialchars($row['description']) ?></td>
                  <td><?= $row['created_at'] ?></td>
                  <td>
                    <a href="categories.php?delete=<?= $row['category_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Futa?')">Delete</a>
                  </td>
                </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- MODAL YA KU-ADD -->
  <div class="modal fade" id="addModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="categories.php">
          <div class="modal-header">
            <h4 class="modal-title">Add New Category</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Category Name *</label>
              <input type="text" name="category_name" class="form-control" required placeholder="Mf: Speakers">
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea name="description" class="form-control" placeholder="Maelezo mafupi"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Category</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
