<?php
include 'koneksi.php';
$kd_jurusan = $_GET['kd_jurusan'];
$sql = "DELETE FROM jurusan WHERE kd_jurusan='$kd_jurusan'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil dihapus');window.location='index.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data');</script>";
}
mysqli_close($conn);
?>