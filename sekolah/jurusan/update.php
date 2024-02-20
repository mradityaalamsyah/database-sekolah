<?php
// koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
     //Ambil data dari formulir
    $kd_jurusan = $_POST['kd_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];

     //Query untuk memperbarui data
     $query = "UPDATE jurusan SET nama_jurusan='$nama_jurusan' WHERE kd_jurussan='$kd_jurusan'";
     mysqli_query($conn,$query);

     // redirect setelah berhasil memperbarui data
     header("Location: index.php");
     exit();
}

//ambil data siswa berdasarkan NIS
$kd_jurusan = $_GET['kd_jurusan'];
$query = "SELECT*FROM jurusan WHERE kd_jurusan='$kd_jurusan'";
$result = mysqli_query($conn,$query);
$kelas = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Jurusan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Jurusan</h2>
        <form method="POST">
        <div class="form-group">
           <label for="kd_kelas">Id Jurusan:</label>
           <input type="number" class="form-control" id="kd_jurusan" name="kd_jurusan" value="<?php echo $jurusan ['kd_jurusan'];?>">
        </div> <br>
        <div class="form-group">
           <label for="kd_kelas">Nama Jurusan:</label>
           <input type="number" class="form-control" id="kd_jurusan" name="nama_jurusan" value="<?php echo $jurusan ['nama_jurusan'];?>">
        </div> <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>