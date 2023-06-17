<?php
require 'function/userlogedin.php';
require './function/img.php';
require './php/register.php';
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="shortcut icon" href="assets/layout_img/<?= htmlspecialchars($tapicon) ?>" type="image/x-icon">

    <title>User - <?= htmlspecialchars($pagetitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($description) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($keywords) ?>">
</head>

<body>
    <?php include "template/bnav.php"; ?>
    <main class="login">
        <form  method="post">
            <div>
                <img src='assets/layout_img/<?= htmlspecialchars($tapicon) ?>' alt='Tapicon' loading='lazy'>
            </div>
            <h1>Logindaten</h1>
            <label for="user">User
                <input type="text" name="user" id="" placeholder="User">
            </label>
            <label for="password">Passwort
                <input type="password" name="password" id="" placeholder="geheim">
            </label>
            <input type="submit" value="Einlogen">
        </form>

    </main>
</body>

</html>