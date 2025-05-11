<?php
$koneksi = new mysqli("localhost", "root", "", "laundry");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$id = intval($_POST['id']);
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];
$layanan = $_POST['layanan'];
$jumlah = $_POST['jumlah'];
$catatan = $_POST['catatan'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$status = $_POST['status'];

$query = "UPDATE pelanggan SET
    nama = '$nama',
    telepon = '$telepon',
    alamat = '$alamat',
    layanan = '$layanan',
    jumlah = '$jumlah',
    catatan = '$catatan',
    tanggal_masuk = '$tanggal_masuk',
    status = '$status'
    WHERE id = $id";

$koneksi->query($query);
header("Location: pelanggan.php");
exit;
?>
