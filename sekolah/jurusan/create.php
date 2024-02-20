<?php
// koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //Ambil data dari formulir
    $kd_jurusan = $_POST['kd_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];
    
    //Query untuk menyimpan data baru
    $query = "INSERT INTO kelas (kd_jurusan,nama_jurusan) VALUES ('$kd_jurusan','$nama_jurusan')";
    mysqli_query($conn,$query);

    //Redirect setelah berhasil membuat data baru
    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create jurusan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Tambah jurusan</h2>
        <form method="POST">
        <div class="form-group">
           <label for="kd_jurusan">Id:</label>
           <input type="number" class="form-control" id="kd_jurusan" name="kd_jurusan">
        </div>
        <div class="form-group">
           <label for="nama_jurusan">Nama Jurusan:</label>
           <input type="number" class="form-control" id="nama_jurusan" name="nama_jurusan">
        </div> <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
     </form> <br>
    </div>
</body>
</html>