<?php
include 'koneksi.php';
$nis = $_GET['nis'];
$sql = "DELETE FROM siswa WHERE nis='$nis'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil dihapus');window.location='index.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data');</script>";
}
mysqli_close($conn);
?>