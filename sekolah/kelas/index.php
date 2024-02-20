<?php
// koneksi ke database
include 'koneksi.php';

//query untuk mengambil semua data user
$query ="SELECT*FROM kelas";
$result =mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Dafar Kelas</h2>
        <a href="create.php" class="btn btn-primary mb-3">Tambah Kelas</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id Kelas</th>
                    <th>Kelas</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['kd_kelas'];?></td>
                    <td><?php echo $row['nama_kelas'];?></td>
                    <td>
                        <a href="update.php?kd_kelas=<?php echo $row['kd_kelas'];?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?kd_kelas=<?php echo $row['kd_kelas'];?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>