<?php
$title = "Om | Nättraby vägmuseum";
include("view/header.php");
?>

<main>

    <?php require __DIR__ . "/view/object-menu.php" ?>

    <article>
        <?php
        $db = connectToDatabase($dsn1);

        $stmt = $db->prepare("SELECT * FROM article WHERE ((name = 'nattraby-vagmuseum') OR name LIKE ('om%')) AND name not in('om-vagmuseum')");
        $stmt->execute();

        $res = $stmt->fetchAll();

        foreach ($res as $value) {
            echo "<header style='width: calc(100% - 430px);'><h1>" . $value["title"] . "</h1>";
            echo "<a href=\"https://www.google.se/maps/place/" . str_replace(' ', '+', substr($value["gps"], 4, 23)) . "\"><i>" . $value["gps"] . "</i></a></header>";

            $imgPath = "img/250/";
            if ($value["image1"] != null) {
                $imgData1 = getimagesize($imgPath . $value["image1"]);
                echo "<div class='rightAlign'><figure style='width:" . $imgData1[0] . "px;'><img src='" . $imgPath . $value["image1"] . "' alt='" . $value["image1Alt"] . "' />
                <figcaption>" . $value["image1Text"] . "</figcaption></figure></div>";

                $style = "style='width: calc(100% - " . ($imgData1[0] + 20) . "px);'";  // -20 för att räkna bort marginalen.
            }

            echo "<div class='leftAlign' " . $style . ">" . $value["data"] . "<br /><footer>Text: <i>" . $value["author"] . "</i></footer><br /><br /></div>";
        }

        ?>

    </article>
</main>

<?php include("view/footer.php"); ?>
