<?php
require 'function/userlogedin.php';
require 'db/connection.php';
require 'php/bhome.php';
require './function/img.php';
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend</title>
    <link rel="stylesheet" href="style/main.css">
    <link rel="icon" href="assets/layout_img/<?= htmlspecialchars($tapicon) ?>">
</head>

<body>

    <?php include "template/bnav.php"; ?>
    <main>

        <div class="newcontent">
            <h1>Neuer Content</h1>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">

                <input class="contentnew" type="text" name="newcontent" placeholder="Mein heutiger Eintrag ...." required>

                <input class="senden" type="submit" value="Absenden">
            </form>
        </div>

        <div class="content">
            <?php foreach ($ergebnis as $row) : ?>
                <span class="contentlinie">
                    <p>
                        <?= $row['id'] ?>. <?= $row['spruch'] ?>
                    </p>
                    <span>
                        <a class="loeschen" href="/bhome?id=<?= $row['id'] ?>&type=loeschen">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg>
                        </a>
                    </span>
                </span>
            <?php endforeach ?>
        </div>
    </main>
</body>

</html>