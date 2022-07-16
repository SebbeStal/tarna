<?php
$title = "Om mig | Nättraby vägmuseum";
include("view/header.php");
?>

<main>

    <?php require __DIR__ . "/view/object-menu.php" ?>

    <article>
        <header>
            <h1>Om mig</h1>
        </header>

        <figure class="rightAlign"><img src="img/me-small.jpg" alt="Bild på Sebastian Stålnacke." height="250">
            <figcaption>Sebastian Stålnacke.</figcaption>
        </figure>
        <p>Jag heter Sebastian Stålnacke och växte upp bland skog och åkrar i västra
        Uppland, inte alls långt från där jag nu bor i östra Västmanland. Däremellan har
        jag dock hunnit bo ett drygt decenium i Stockholm och att det blev landsbyggden
        igen hade mycket att göra med makens önskan att komma bort från storstaden. Det är
        också skönare för våra hundar, vi har två stycken pojkar av rasen Xoloitzcuintle.</p>
        <p>Till vardags är jag bibliotekarie, så lite av en superhjälte. Fokus för mitt arbete
        ligger främst på digitala biblioteksaspekter, men litteratur är en viktig del av mitt liv.
        Jag har också en förkärlek till onomatopoetiska ord!</p>
        <p>Även om jag flyttat från storstaden så ligger min arbetsplats fortfarande i Stockholm.
        Det är med andra ord lite tid som går till pendling varje dag. Ska man vara krass så tar
        det dock ungefär lika lång tid som när man faktiskt bor där.</p>
        <p>Denna webbplats är skapad som en del i examinationen av kursen Web Technology (htmlphp) vid Blekinge Tekniska Högskola.</p>

    </article>
</main>

<?php include("view/footer.php"); ?>
