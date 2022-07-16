<?php
$db = connectToDatabase($dsn1);

$stmt = $db->prepare("SELECT name, title FROM article WHERE (name NOT in ('start', 'nattraby-vagmuseum', 'kartor', 'kallor','kontakt') AND name NOT LIKE ('om%'))");
$stmt->execute();

$res = $stmt->fetchAll();
?>

<aside>
    <nav>
        <?php $uriFile = basename($_SERVER["REQUEST_URI"]); ?>
        <a class="<?= $uriFile == "index.php" ? "selected" : null ?>" href="index.php">Start</a>
        <?php foreach ($res as $value) : ?>
            <a class="<?= $uriFile == "content.php?page=content&name=" . $value["name"] ? "selected" : null ?>" href="content.php?page=content&name=<?= $value["name"] ?>"><?= $value["title"] ?></a>
        <?php endforeach; ?>
        <a class="<?= $uriFile == "about.php" ? "selected" : null ?>" href="about.php">Om Nättraby vägmuseum</a>
    </nav>
</aside>
