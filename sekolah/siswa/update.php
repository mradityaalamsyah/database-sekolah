<?php
// koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
     //Ambil data dari formulir
     $nis = $_POST['nis'];
     $nama = $_POST['nama'];
     $ttl = $_POST['ttl'];
     $alamat = $_POST['alamat'];
     $jenis_kelamin = $_POST['jenis_kelamin'];

     //Query untuk memperbarui data
     $query = "UPDATE siswa SET nama='$nama',ttl='$ttl',alamat='$alamat','jenis_kelamin='$jenis_kelamin' WHERE nis='$nis'";
     mysqli_query($conn,$query);

     // redirect setelah berhasil memperbarui data
     header("Location: index.php");
     exit();
}

//ambil data siswa berdasarkan NIS
$nis = $_GET['nis'];
$query = "SELECT*FROM siswa WHERE nis='$nis'";
$result = mysqli_query($conn,$query);
$siswa = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Siswa</h2>
        <form method="POST">
        <div class="form-group">
           <label for="nis">NIS:</label>
           <input type="number" class="form-control" id="nis" name="nis" value="<?php echo $siswa ['nis'];?>">
        </div>
        <div class="form-group">
           <label for="nama">Nama:</label>
           <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $siswa ['nama'];?>">
        </div>
        <div class="form-group">
           <label for="ttl">Tanggal Lahir:</label>
           <input type="date" class="form-control" id="ttl" name="ttl" value="<?php echo $siswa ['ttl'];?>">
        </div>
        <div class="form-group">
           <label for="alamat">Alamat:</label>
           <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $siswa ['alamat'];?>">
        </div> <br>
        <div class="form-group">
           <label for="jenis_kelamin">Jenis Kelamin:</label>
           <select name="form-control" id="jenis_kelamin" name="jenis_kelamin">
             <option value="Laki-laki" <?php if ($siswa['jenis_kelamin'] == 'Laki-laki') echo 'selected';?>>Laki-Laki</option>
             <option value="Perempuan" <?php if ($siswa['jenis_kelamin'] == 'Perempuan') echo 'selected';?>>Perempuan</option>
           </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>