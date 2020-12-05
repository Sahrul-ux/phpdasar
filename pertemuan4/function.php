<?php
function salam($waktu, $nama) {
    return "Selamat $waktu, $nama!";
}

?>
<!DOCKTYPE html>
<html>
<head>
    <title>Latihan function</title>
</head>
<body>
<h1><?= salam("Pagi", "Sahrul"); ?></h1>



</body>
</html>