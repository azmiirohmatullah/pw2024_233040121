<?php

$mahasiswa = [
    [
        "nama" => "Haekal Khadafy",
        "nrp" => "233040116",
        "email" => "haekalkhadafy@gmail.com",
    ],
    [
        "nama" => "Tegar Setyo Wiguno",
        "nrp" => "233040112",
        "email" => "tegar@gmail.com",
    ],
    [
        "nama" => "Sopyan Nuravin",
        "nrp" => "233040115",
        "email" => "sopyan@gmail.com",
    ],
    [
        "nama" => "Renu Resdina Putra",
        "nrp" => "233040117",
        "email" => "renu@gmail.com",
    ],
    [
        "nama" => "Azmii Rohmatullah",
        "nrp" => "233040121",
        "email" => "azmii@gmail.com",
    ],
    [
        "nama" => "Fikri Lazuardi Fadilla",
        "nrp" => "233040123",
        "email" => "fikri@gmail.com",
    ],
    [
        "nama" => "Ripan Fadilah Nurseptiani",
        "nrp" => "233040131",
        "email" => "ripan@gmail.com",
    ],
    [
        "nama" => "Fauzan Azka Ferdianto",
        "nrp" => "233040133",
        "email" => "fauzan@gmail.com",
    ],
    [
        "nama" => "Hafid Hermawan Saputra",
        "nrp" => "233040136",
        "email" => "hafid@gmail.com",
    ],
    [
        "nama" => "Andhika Pramudya S",
        "nrp" => "233040139",
        "email" => "andika@gmail.com",
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas array associative</title>
</head>
<body>
    <h1>Daftar Mahasiswa Teknik Informatika Unpas</h1>
    <?php foreach ($mahasiswa as $mhs) :?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nama : <?= $mhs["nrp"]; ?></li>
            <li>Nama : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>