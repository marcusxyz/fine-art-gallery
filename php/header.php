<?php require __DIR__ . ('/variables.php'); ?>
<?php require __DIR__ . ('/functions.php'); ?>
<?php require __DIR__ . ('/arrays.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle; ?></title>
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/screens.css">
    <link rel="stylesheet" href="../css/typography.css">

    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/hero.css">
    <link rel="stylesheet" href="../css/gallery.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
    <header>
        <nav>
            <a href="#"><?= $pageTitle; ?></a>
            <ul>
                <li>Gothenburg, 15 Oct 08:46</li>
                <li>Currently open</li>
            </ul>
        </nav>
        <div class="separator header"></div>
    </header>