<?php 
session_start();
if ($_SESSION['role'] !== 'admin') {
    session_destroy();
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <div class="d-flex">
                <span class="navbar-text me-3 text-white">
                    Welcome, <?php echo $_SESSION['name']; ?>
                </span>
                <a href="./backend/logout.php" class="btn btn-danger btn-sm">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-4">Selamat Datang Administrator</h1>
            <p class="lead">Anda login sebagai: <strong><?php echo $_SESSION['name']; ?></strong></p>
        </div>
    </div>

    <!-- Bootstrap JS (optional, untuk interaksi tambahan) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
