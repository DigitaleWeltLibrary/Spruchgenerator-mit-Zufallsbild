<footer>
    <?php if ($impressum !== "") : ?>
        <a href="<?= htmlspecialchars($impressum) ?>" target="_blank">Impressum</a>

    <?php endif ?>

    <?php if ($datenschutz !== "") : ?>
        <a href="<?= htmlspecialchars($datenschutz) ?>" target="_blank">Datenschutz</a>

    <?php endif ?>
    <?php if ($agbs !== "") : ?>

        <a href="<?= htmlspecialchars($agbs) ?>" target="_blank">AGB</a>
    <?php endif ?>
</footer>