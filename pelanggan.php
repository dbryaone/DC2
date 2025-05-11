<?php
$koneksi = new mysqli("localhost", "root", "", "laundry");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
$result = $koneksi->query("SELECT * FROM pelanggan ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pelanggan Laundry</title>
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
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 40px;
            max-width: 500px;
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
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #2c3e50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .container {
            max-width: 1000px;
            margin: auto;
        }
        .btn-danger {
            background-color: #e74c3c;
        }
        .btn-danger:hover {
            background-color: #c0392b;
        }
        .btn-success {
            background-color: #2ecc71;
        }
        .btn-success:hover {
            background-color: #27ae60;
        }
        .btn-warning {
            background-color: #f39c12;
        }
        .btn-warning:hover {
            background-color: #e67e22;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Form Input Pelanggan</h2>
    <form action="proses_pelanggan.php" method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Telepon:</label>
        <input type="text" name="telepon" required>

        <label>Alamat:</label>
        <textarea name="alamat" required></textarea>

        <label>Layanan:</label>
        <input type="text" name="layanan" required>

        <label>Jumlah (kg/item):</label>
        <input type="number" name="jumlah" required>

        <label>Catatan Tambahan:</label>
        <textarea name="catatan"></textarea>

        <label>Tanggal Masuk Cucian:</label>
        <input type="date" name="tanggal_masuk" required>

        <label>Status Pembayaran:</label>
        <select name="status" required>
            <option value="Belum Dibayar">Belum Dibayar</option>
            <option value="Sudah Dibayar">Sudah Dibayar</option>
        </select>

        <input type="submit" value="Simpan">
    </form>

    <h2>Daftar Pelanggan</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Layanan</th>
            <th>Jumlah</th>
            <th>Catatan</th>
            <th>Tanggal Masuk</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php if ($result->num_rows > 0): ?>
            <?php $no = 1; ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
                    <td><?= htmlspecialchars($row['telepon']) ?></td>
                    <td><?= htmlspecialchars($row['alamat']) ?></td>
                    <td><?= htmlspecialchars($row['layanan']) ?></td>
                    <td><?= htmlspecialchars($row['jumlah']) ?></td>
                    <td><?= htmlspecialchars($row['catatan']) ?></td>
                    <td><?= htmlspecialchars($row['tanggal_masuk']) ?></td>
                    <td><?= htmlspecialchars($row['status']) ?></td>
                    <td>
                        <?php if ($row['status'] == 'Belum Dibayar'): ?>
                            <a class="btn btn-success" href="bayar.php?id=<?= $row['id'] ?>" onclick="return confirm('Konfirmasi pembayaran pelanggan ini?')">Bayar</a>
                        <?php else: ?>
                            <span style="color: green;">✓ Lunas</span>
                        <?php endif; ?>
                        <br><br>
                        <a class="btn btn-warning" href="edit_pelanggan.php?id=<?= $row['id'] ?>">Edit</a>
                        <a class="btn btn-danger" href="hapus_pelanggan.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="10">Belum ada data.</td></tr>
        <?php endif; ?>
    </table>

    <br>
    <a href="index.php" class="btn btn-danger">← Kembali ke Home</a>
</div>
</body>
</html>
