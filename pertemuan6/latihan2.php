<?php

// $mahasiswa = [
//     ["Sahrul Rojab", "1855201092", "sahrul@gmail.com", "Teknik Informatika"],
//     ["Bambang", "1855201093", "bambang@gmail.com", "Teknik Industri"]
// ];

// array assosiative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Sahrul Rojab",
        "nrp"  => "1855201092",
        "email" => "sahrul@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "gambar1.jpg"
    ],
    [
        "nama" => "Bambang",
        "nrp"  => "1855201093",
        "email" => "bambang@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "gambar2.jpg"
    ]
];

?>

<html>

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nama : <?= $mhs["nrp"]; ?></li>
            <li>Nama : <?= $mhs["jurusan"]; ?></li>
            <li>Nama : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>



</body>

</html>