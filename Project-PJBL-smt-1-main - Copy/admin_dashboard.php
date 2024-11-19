<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include 'db.php';

// Direktori untuk menyimpan file gambar
$upload_dir = "uploads/";

// Handle Create dan Update
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['create'])) {
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $tanggal = $_POST['tanggal'];
        $gambar = "";

        // Proses Upload File Gambar
        if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
            $file_tmp = $_FILES['gambar']['tmp_name'];
            $file_name = $_FILES['gambar']['name'];
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            $allowed_ext = ['jpg', 'jpeg', 'png'];

            if (in_array($file_ext, $allowed_ext) && $_FILES['gambar']['size'] <= 2097152) { // 2MB
                $gambar = uniqid() . '.' . $file_ext;
                move_uploaded_file($file_tmp, $upload_dir . $gambar);
            } else {
                echo "<div class='alert alert-danger'>Gambar tidak valid (format JPG/PNG dan max 2MB).</div>";
                exit;
            }
        }

        // Simpan ke database
        $query = $conn->prepare("INSERT INTO berita (judul, deskripsi, gambar, tanggal) VALUES (?, ?, ?, ?)");
        $query->bind_param("ssss", $judul, $deskripsi, $gambar, $tanggal);
        $query->execute();
    } elseif (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $tanggal = $_POST['tanggal'];
        $gambar = $_POST['existing_gambar'];

        // Proses Upload File Gambar (jika ada file baru)
        if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
            $file_tmp = $_FILES['gambar']['tmp_name'];
            $file_name = $_FILES['gambar']['name'];
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            $allowed_ext = ['jpg', 'jpeg', 'png'];

            if (in_array($file_ext, $allowed_ext) && $_FILES['gambar']['size'] <= 2097152) { // 2MB
                $gambar = uniqid() . '.' . $file_ext;
                move_uploaded_file($file_tmp, $upload_dir . $gambar);
            } else {
                echo "<div class='alert alert-danger'>Gambar tidak valid (format JPG/PNG dan max 2MB).</div>";
                exit;
            }
        }

        // Update data ke database
        $query = $conn->prepare("UPDATE berita SET judul = ?, deskripsi = ?, gambar = ?, tanggal = ? WHERE id = ?");
        $query->bind_param("ssssi", $judul, $deskripsi, $gambar, $tanggal, $id);
        $query->execute();
    }
}

// Handle Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = $conn->prepare("DELETE FROM berita WHERE id = ?");
    $query->bind_param("i", $id);
    $query->execute();
}

$berita = $conn->query("SELECT * FROM berita ORDER BY tanggal DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h1 class="text-center mb-4">Dashboard Admin</h1>
            <div class="mb-3 text-end">
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
            <form method="POST" enctype="multipart/form-data" class="mb-4 border p-3 rounded">
                <h2>Tambah Berita</h2>
                <!-- Judul -->
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" id="judul" name="judul" class="form-control" required>
                </div>
                <!-- Deskripsi -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" class="form-control" rows="4" required></textarea>
                </div>
                <!-- Gambar -->
                <div class="mb-3">
                    <label for="gambar" class="form-label">Upload Gambar</label>
                    <input type="file" id="gambar" name="gambar" class="form-control" accept="image/*">
                    <small class="text-muted">Format: JPG, PNG (max 2MB)</small>
                </div>
                <!-- Tanggal -->
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                </div>
                <!-- Submit -->
                <button type="submit" name="create" class="btn btn-success w-100">Tambah</button>
            </form>

            <h2>List Berita</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $berita->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['judul']; ?></td>
                            <td><?= $row['deskripsi']; ?></td>
                            <td>
                                <?php if ($row['gambar']): ?>
                                    <img src="uploads/<?= $row['gambar']; ?>" height="50">
                                <?php else: ?>
                                    <span class="text-muted">No Image</span>
                                <?php endif; ?>
                            </td>
                            <td><?= date('d M Y', strtotime($row['tanggal'])); ?></td>
                            <td>
                                <a href="?edit=<?= $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="?delete=<?= $row['id']; ?>" class="mt-2 btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
