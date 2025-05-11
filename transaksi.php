<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "laundry_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil semua layanan
$layanan = $conn->query("SELECT * FROM layanan_laundry");

// Proses saat form disubmit
$pesan = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_layanan = $_POST["layanan"];
    $jumlah = $_POST["jumlah"];

    $query = $conn->query("SELECT * FROM layanan_laundry WHERE id = $id_layanan");
    $data = $query->fetch_assoc();

    if ($data) {
        $nama_layanan = $data["nama_layanan"];
        $harga = $data["harga"];
        $total = $harga * $jumlah;

        // Simpan ke tabel transaksi
        $stmt = $conn->prepare("INSERT INTO transaksi (nama_layanan, jumlah, total) VALUES (?, ?, ?)");
        $stmt->bind_param("sii", $nama_layanan, $jumlah, $total);
        if ($stmt->execute()) {
            $pesan = "Transaksi berhasil disimpan: $nama_layanan x $jumlah = Rp " . number_format($total);
        } else {
            $pesan = "Gagal menyimpan transaksi.";
        }
        $stmt->close();
    } else {
        $pesan = "Layanan tidak ditemukan.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Transaksi Laundry</title>
</head>
<body>
    <h2>Form Transaksi Laundry</h2>

    <?php if ($pesan): ?>
        <p><strong><?= $pesan ?></strong></p>
    <?php endif; ?>

    <form method="post">
        <label for="layanan">Pilih Layanan:</label>
        <select name="layanan" id="layanan" required>
            <?php while ($row = $layanan->fetch_assoc()): ?>
                <option value="<?= $row['id'] ?>">
                    <?= $row['nama_layanan'] ?> - Rp <?= number_format($row['harga']) ?>/<?= $row['satuan'] ?>
                </option>
            <?php endwhile; ?>
        </select><br><br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" id="jumlah" min="1" required><br><br>

        <input type="submit" value="Simpan Transaksi">
    </form>

    <br>
    <a href="lihat_transaksi.php">Lihat Semua Transaksi</a>
</body>
</html>

<?php $conn->close(); ?>
