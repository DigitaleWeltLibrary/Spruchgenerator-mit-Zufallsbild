<?php
require 'db/connection.php';
require 'php/bhome.php';
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend</title>
    <link rel="stylesheet" href="style/main.css">
</head>

<body>

<nav class="backnav">
         <a href="/">Projekt ansehen</a>   
         <a href="/login?action=out">
         <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
         </a>
        </nav>
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