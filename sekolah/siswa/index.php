<?php
// koneksi ke database
include 'koneksi.php';

//query untuk mengambil semua data user
$query ="SELECT*FROM siswa";
$result =mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Dafar Siswa</h2>
        <a href="create.php" class="btn btn-primary mb-3">Tambah Siswa</a>
        <table class="table">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>jenis Kelamin</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['nis'];?></td>
                    <td><?php echo $row['nama'];?></td>
                    <td><?php echo $row['ttl'];?></td>
                    <td><?php echo $row['alamat'];?></td>
                    <td><?php echo $row['jenis_kelamin'];?></td>
                    <td>
                        <a href="update.php?nis=<?php echo $row['nis'];?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?nis=<?php echo $row['nis'];?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>