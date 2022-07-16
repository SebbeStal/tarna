<?php
$title = "Start | Nättraby vägmuseum";
include("view/header.php");
?>

<main>

    <?php require __DIR__ . "/view/object-menu.php" ?>

    <article>
        <?php
        echo "<header><h1> Välkommen till " . ":)" . "</h1></header>";

        echo "<div class='leftAlign' " . $style . ">" . $res[0]["data"] . "<p>Här beskrivs allt från den 1000-åriga stigen, via 1600-talets milstolpar och 30-talets
        gatstensbelagda landsvägar, till dagens asfaltbelagda motorväg. Plus förstås järnvägen, vattenvägen, isvägen, broarna och Sveriges två(!) högertrafikomläggningar.</p>
        <p>Via kartor och GPS-koordinater hittar besökarna lätt fram till de 14 olika utvalda vägmiljöer som utgör Nättraby Vägmuseum:</p>
        <ul><li>Hålvägen – stigen</li><li>Via Regia – landsvägen</li><li>Värendsvägen – handelsvägen</li><li>Skillinge – övergivna vägen</li><li>Milstolparna – vägmärkena</li>
        <li>Ryttarliden – namnminnet</li><li>Riks 4 – gatstensvägen</li><li>E22 – motorvägen</li><li>Cykelvägen – bilfria vägen</li><li>Kustbanan – järnvägen</li>
        <li>Krösnabanan – smalspåret</li><li>Nättrabyån – vattenvägen</li><li>Isvägen – vintervägen</li><li>Stenbron – vägen över vatten</li></ul>
        <p>Digitala informationen om Nättraby Vägmusem kompletteras i framtiden av fysiska utställningspaviljonger och informationsskyltar i Nättraby, som ligger vid E22 en
        mil väster om Karlskrona i Blekinge.</p>"
        ?>

    </article>
</main>

<?php include("view/footer.php"); ?>
