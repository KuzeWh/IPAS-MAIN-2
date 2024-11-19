<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = $conn->prepare("INSERT INTO admin (username, password) VALUES (?, ?)");
    $query->bind_param("ss", $username, $password);

    if ($query->execute()) {
        $success = "Admin berhasil dibuat!";
    } else {
        $error = "Gagal membuat admin. Username mungkin sudah ada.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Register Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <form method="POST" class="card p-4 shadow" style="width: 400px;">
            <h2 class="text-center mb-3">Register Admin</h2>
            <?php if (isset($success)): ?>
                <div class="alert alert-success"><?= $success; ?></div>
            <?php elseif (isset($error)): ?>
                <div class="alert alert-danger"><?= $error; ?></div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Buat Admin</button>
        </form>
    </div>
</body>
</html>
