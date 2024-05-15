<?php
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "tugas7");

//ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

//ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row() //mengembalikan array numerik
//myslqi_fetch_assoc() // mengembalikan array associative
//mysqli_fetch_array() //mengembalikan keduanya
// mysqli_fetch_object 

// while ($mhs = mysqli_fetch_assoc($result)) {
// var_dump($mhs);    
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1;?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><img src="img/<?php echo $row["gambar"]; ?>" width="100"></td>
            <td><?php echo $row["nrp"]; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile;?>
    </table>
</body>
</html>1