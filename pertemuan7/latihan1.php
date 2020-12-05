<?php
//Get
$mahasiswa = [
    [
        "nama" => "Sahrul Rojab",
        "nrp" => "1855201092",
        "email" => "sahrul@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "gambar1.jpg"
    ],
    [
        "nama" => "Bambang",
        "nrp" => "1855201093",
        "email" => "bambang@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "gambar2.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>