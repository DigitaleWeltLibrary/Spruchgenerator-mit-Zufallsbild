<?php
require './db/connection.php';
require './php/home.php';
require './php/img.php';
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="icon" href="assets/layout_img/<?= $tapicon ?>">
    <title> <?= htmlspecialchars($pagetitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($description) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($keywords) ?>">

</head>

<body>
    <header>
        <h1><?= htmlspecialchars($pagetitle) ?></h1>
    </header>
    <main class="home">
        <?php foreach ($spruch as $row) : ?>
            <div class="spruch">
                <span>
                    <p><?= htmlspecialchars($row['spruch']) ?></p>
                </span>
                <img src='assets/content_img/<?= htmlspecialchars($bild) ?>' alt='Bild zur Affirmation' loading='lazy'>
            </div>
        <?php endforeach ?>
        <div class="btn">
            <a href="JavaScript:location.reload()"><button>Neue Affirmation</button></a>
        </div>
    </main>
    <?php include("template/footer.php"); ?>
</body>

</html>