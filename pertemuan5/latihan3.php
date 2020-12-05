<?php
$mahasiswa = [
    ["Sahrul Rojab", "18855201092", "Teknik Informatika", "sahrulrajab11@gmail.com"],
    ["Bambang", "18855201093", "Teknik Industri", "bambang@gmail.com"],
    ["Bambang", "18855201093", "Teknik Industri", "bambang@gmail.com"]
];
?>
<DOCKTYPE html>
<html>
<head>
    <title>Data mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach ( $mahasiswa as $mhs ) :  ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>