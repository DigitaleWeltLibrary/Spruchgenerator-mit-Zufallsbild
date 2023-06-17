<?php
require './php/img.php';
require './php/layout.php';
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="icon" href="assets/layout_img/<?= htmlspecialchars($tapicon) ?>">
    <title> <?= htmlspecialchars($pagetitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($description) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($keywords) ?>">
</head>

<body>
    <?php include "template/bnav.php"; ?>

    <main class="layout">
        <div class="tapicon">

            <div class="flex">
                <img src="assets/layout_img/<?= htmlspecialchars($tapicon) ?>" alt='<?= htmlspecialchars($tapicon) ?>' loading='lazy'>
                <form method="post" enctype="multipart/form-data" name="tapicon">
                    <h1>Tapicon</h1>
                    <div class="upload-btn ">
                        <input type="file" name="tapicon" id="" accept=".jpg,.png" required>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z" />
                        </svg>
                    </div>
                    <input type="submit" value="Hochladen">
                </form>
            </div>

        </div>
        <div class="tapicon">
            <div class="flex">
                <img src="assets/layout_img/<?= htmlspecialchars($headerimg) ?>" alt='<?= htmlspecialchars($headerimg) ?>' loading='lazy' style="object-fit: cover;">
                <form method="post" enctype="multipart/form-data" name="header">
                    <h1>Header-img</h1>
                    <div class="upload-btn ">
                        <input type="file" name="headerimg" id="" accept=".jpg,.png" required>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z" />
                        </svg>
                    </div>
                    <input type="submit" value="Hochladen">
                </form>
            </div>

        </div>
    </main>

</body>

</html>