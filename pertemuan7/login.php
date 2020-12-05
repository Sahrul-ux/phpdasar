<?php
//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //cek user name & password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        //jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        //jika salah tampilkan pesan kesalahan
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>
    <h1>Login Admin</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style:italic;">Username / password salah!</p>
    <?php endif; ?>
    <form action="" method="post">
        <label>
            Username :
            <input type="text" name="username">
        </label>
        <br>
        <label>
            Password :
            <input type="password" name="password">
        </label>
        <br>
        <button type="submit" name="submit">Login</button>

</body>

</html>