<?php
$koneksi = new mysqli("localhost", "root", "", "laundry");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$id = intval($_GET['id']);
$result = $koneksi->query("SELECT * FROM pelanggan WHERE id = $id");
$data = $result->fetch_assoc();

if (!$data) {
    echo "Data tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pelanggan</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 30px;
            background: #f4f4f9;
            color: #333;
        }
        h2 {
            color: #2c3e50;
        }
        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            max-width: 500px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        input[type="text"],
        input[type="number"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        input[type="submit"], .btn {
            background: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        input[type="submit"]:hover, .btn:hover {
            background: #2980b9;
        }
        .btn-secondary {
            background-color: #95a5a6;
        }
        .btn-secondary:hover {
            background-color: #7f8c8d;
        }
    </style>
</head>
<body>
    <h2>Edit Data Pelanggan</h2>
    <form action="update_pelanggan.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">

        <label>Nama:</label>
        <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" required>

        <label>Telepon:</label>
        <input type="text" name="telepon" value="<?= htmlspecialchars($data['telepon']) ?>" required>

        <label>Alamat:</label>
        <textarea name="alamat" required><?= htmlspecialchars($data['alamat']) ?></textarea>

        <label>Layanan:</label>
        <input type="text" name="layanan" value="<?= htmlspecialchars($data['layanan']) ?>" required>

        <label>Jumlah (kg/item):</label>
        <input type="number" name="jumlah" value="<?= $data['jumlah'] ?>" required>

        <label>Catatan Tambahan:</label>
        <textarea name="catatan"><?= htmlspecialchars($data['catatan']) ?></textarea>

        <label>Tanggal Masuk Cucian:</label>
        <input type="date" name="tanggal_masuk" value="<?= $data['tanggal_masuk'] ?>" required>

        <label>Status Pembayaran:</label>
        <select name="status" required>
            <option value="Belum Dibayar" <?= $data['status'] == 'Belum Dibayar' ? 'selected' : '' ?>>Belum Dibayar</option>
            <option value="Sudah Dibayar" <?= $data['status'] == 'Sudah Dibayar' ? 'selected' : '' ?>>Sudah Dibayar</option>
        </select>

        <input type="submit" value="Update">
        <a href="pelanggan.php" class="btn btn-secondary">Batal</a>
    </form>
</body>
</html>
