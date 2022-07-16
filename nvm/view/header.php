<!doctype html>
<html lang="sv" id="top">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=2.0;">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/tratex/stylesheet.css" type="text/css" />
    <link rel="shortcut icon" href="img/favicon.ico" />
</head>

<?php
require __DIR__ . "/../config.php";
require __DIR__ . "/../src/functions.php";
?>

<body>
    <header class="site-header">
        <div class="site-header">
            <a class="site-title" href="index.php">Nättraby vägmuseum</a>

            <?php
            $search = isset($_GET['search'])
                ? $_GET['search']
                : null;
            ?>

            <form id="search" action="search.php" method="post">
                <fieldset>
                    <input type="search" name="search" placeholder="Sök bland museets objekt, använd % för trunkering eller wildcard." value="<?=$search?>">
                    <input type="image" name="submit" src="img/search.png" alt="Sök">
                </fieldset>
            </form>

            <?php require __DIR__ . "/content-aside.php" ?>
        </div>
    </header>
