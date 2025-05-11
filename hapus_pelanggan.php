<?php
$koneksi = new mysqli("localhost", "root", "", "laundry");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
$id = intval($_GET['id']);
$koneksi->query("DELETE FROM pelanggan WHERE id = $id");
header("Location: pelanggan.php");
exit;
?>
