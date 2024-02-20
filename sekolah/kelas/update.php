<?php
// koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
     //Ambil data dari formulir
    $kd_kelas = $_POST['kd_kelas'];
    $nama_kelas = $_POST['nama_kelas'];

     //Query untuk memperbarui data
     $query = "UPDATE kelas SET nama_kelas='$nama_kelas' WHERE kd_kelas='$kd_kelas'";
     mysqli_query($conn,$query);

     // redirect setelah berhasil memperbarui data
     header("Location: index.php");
     exit();
}

//ambil data siswa berdasarkan NIS
$kd_kelas = $_GET['kd_kelas'];
$query = "SELECT*FROM kelas WHERE kd_kelas='$kd_kelas'";
$result = mysqli_query($conn,$query);
$kelas = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kelas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Kelas</h2>
        <form method="POST">
        <div class="form-group">
           <label for="kd_kelas">Id Kelas:</label>
           <input type="number" class="form-control" id="kd_kelas" name="kd_kelas" value="<?php echo $kelas ['kd_kelas'];?>">
        </div> <br>
        <div class="form-group">
           <label for="nama_kelas">Jenis Kelamin:</label>
           <select name="form-control" id="nama_kelas" name="nama_kelas">
            <option value="10" <?php if ($kelas['nama_kelas'] == '10') echo 'selected';?>>10</option>
            <option value="11" <?php if ($kelas['nama_kelas'] == '11') echo 'selected';?>>11</option>
            <option value="12" <?php if ($kelas['nama_kelas'] == '12') echo 'selected';?>>12</option>
           </select>
        </div> <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>