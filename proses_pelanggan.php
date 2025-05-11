<?php
// Konfigurasi koneksi database
$host     = "localhost";
$user     = "root"; // Ganti jika bukan root
$password = "";     // Isi jika ada password
$database = "laundry";

// Koneksi ke database
$koneksi = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data dari form
$nama           = $_POST['nama'];
$telepon        = $_POST['telepon'];
$alamat         = $_POST['alamat'];
$layanan        = $_POST['layanan'];
$jumlah         = $_POST['jumlah'];
$catatan        = $_POST['catatan'];
$tanggal_masuk  = $_POST['tanggal_masuk'];

// Query insert ke tabel pelanggan
$sql = "INSERT INTO pelanggan (nama, telepon, alamat, layanan, jumlah, catatan, tanggal_masuk)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

// Jalankan prepared statement
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("ssssiss", $nama, $telepon, $alamat, $layanan, $jumlah, $catatan, $tanggal_masuk);

// Eksekusi dan cek hasil
if ($stmt->execute()) {
    echo "<script>alert('Data berhasil disimpan!'); window.location.href='pelanggan.php';</script>";
} else {
    echo "Gagal menyimpan data: " . $stmt->error;
}

// Tutup koneksi
$stmt->close();
$koneksi->close();
?>
