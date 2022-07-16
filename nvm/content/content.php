<?php
$db = connectToDatabase($dsn1);

$name = isset($_GET["name"])
    ? $_GET["name"]
    : null;

if ($name == null) {
    $name = "start";
}

$stmt = $db->prepare("SELECT * FROM (SELECT * FROM article union SELECT * FROM object) WHERE name = " . "'" . $name . "'");
$stmt->execute();

$res = $stmt->fetchAll();

foreach ($res as $value) {
    echo "<header><h1>" . $value["title"] . "</h1>";
    echo "<a href=\"https://www.google.se/maps/place/" . str_replace(' ', '+', substr($value["gps"], 4, 23)) . "\"><i>" . $value["gps"] . "</i></a></header>";

    $imgPath = "img/250/";
    $style = "style='width: calc(100% - 20px);'";  // -20 för att räkna bort marginalen.

    if ($value["mapImage"] != null) {
        $mapImgData = getimagesize($imgPath . $value["mapImage"] . "_karta.jpg");
        echo "<div class='rightAlign'><figure style='width:" . $mapImgData[0] . "px;'><img src='" . $imgPath . $value["mapImage"] . "_karta.jpg' alt='Karta med platsen utmärkt.' />
        <figcaption>Karta över" . strstr($value["title"], " ") . "</figcaption></figure><br />";

        $style = "style='width: calc(100% - " . ($mapImgData[0] + 20) . "px);'";

    } else {
        echo "<div class='rightAlign'>";
    }

    if ($value["image1"] != null) {
        $imgData1 = getimagesize($imgPath . $value["image1"]);
        echo "<figure style='width:" . $imgData1[0] . "px;'><img src='" . $imgPath . $value["image1"] . "' alt='" . $value["image1Alt"] . "' />
        <figcaption>" . $value["image1Text"] . "</figcaption></figure>";

        if (($value["mapImage"] != null) && ($mapImgData[0] < $imgData1[0])) {
            $style = "style='width: calc(100% - " . ($imgData1[0] + 20) . "px);'";
        } elseif ($value["mapImage"] == null) {
            $style = "style='width: calc(100% - " . ($imgData1[0] + 20) . "px);'";
        }

        if ($value["image2"] != null) {
            $imgData2 = getimagesize($imgPath . $value["image2"]);
            echo "<br /><figure style='width:" . $imgData2[0] . "px;'><img src='" . $imgPath . $value["image2"] . "' alt='" . $value["image2Alt"] . "' />
            <figcaption>" . $value["image2Text"] . "</figcaption></figure></div>";

            if ($imgData1[0] < $imgData2[0] && (($value["mapImage"] != null) &&  ($imgData2[0] > $mapImgData[0]))) {
                $style = "style='width: calc(100% - " . ($imgData2[0] + 20) . "px);'";
            }
        } else {
            echo "</div>";
        }
    } else {
        echo "</div>";
    }

    echo "<div class='leftAlign' " . $style . ">" . $value["data"] . "<br /><footer>Text: <i>" . $value["author"] . "</i></footer></div>";
}
