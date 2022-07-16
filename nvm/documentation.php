<?php
$title = "Dokumentation | Nättraby vägmuseum";
include("view/header.php");
?>

<main>

    <?php require __DIR__ . "/view/object-menu.php" ?>

    <article>
        <header>
            <h1>Dokumentation</h1>
        </header>

        <h2>Kodstruktur och dokumentation</h2>
        <p>Sidan är byggd i en mix av vanliga sidkontrollers och en multisideskonstruktion. Multisidesdelen innefattar några av artiklarna och samtliga objekt.
        Fem sidor har egna sidkontroller:</p>

            <ul>
                <li>Startsidan fick en egen sidkontroller. Dels för att ha index i roten men också för att en inbjudande startsidan inte riktigt kan renderas på samma
                sätt som innehålls-sidorna då webbplatsen ska ha "en välkomnande förstasida".</li>
                <li>Om-sidan fick en egen sidkontroller för att fler av artiklarna renderas på en och samma sida. Jag har slagit ihop alla databasens om-sidor.
                En är utelämnad helt (<i>Nättraby Vägmuseum - om tillkomsten</i>) då den innehållsmässigt är mer eller mindre identisk med <i>Om Nättraby Vägmuseum</i>.</li>
                <li>Om mig och dokumentations-sidan har också egna sidkontroller. Dessa har inget innehåll som kommer från den tillhandahållna databasen.
                Innehållsmässigt har jag har använt mig presentationen från de tidigare me-sidorna, och jag valde att slå ihop rapport och doukmentation till en sida.</li>
                <li>Slutligen så har sidan för sökträffar naturligt sin egen sidkontroller. Den visar träffar av söknig bland museets objekt och följer inte samma mönster
                som tidigare sidor.</li>
            </ul>

        <p>Vidare har jag valt att (med javascript) göra museets objekt tillgänliga på samtliga sidor i en dropdown-meny. Den ligger centralt på sidan då objekten måste
        anses vara det centrala i ett museums verksamhet.</p>

        <p>Sidan har bara enkel responsiv funktionalitet varav majoriteten kommer sig av att jag generellt använder relativa värden som % och em i min css. Jag hade en tanke
        om att sätta responsivitet för fler variationer av skärmar, men hade inte tid för det.</p>

        <p>Som webbplatsen ser ut nu så finns många områden för vidareutveckling! Först och främst behövs en utökad responsivitet; mobil, platta och dator samt liggande eller
        stående skärm. Jag skulle också lnska en specifik CSS för utskrifter av artiklar och objekt, och såklart att admin-gränssnitt (som jag inte hann med nu). Sökfunktionen
        skulle även den kunna utvecklas så den automatiskt har med trunkering. Slutligen skulle jag i normala fall kommenterat koden ordentligt, vilket jag inte gjort nu. </p>

        <h2>Rapport</h2>
        <p><b>Krav 1, 2, 3:</b> Den layout jag valt grundar sig i hur många moderna sidor ser ut, en viss minimalism med inslag av grafiska komponenter tycks fortfarande
        gälla. Jag ville att webbplatsen skulle kännas modern, vilket även går igenom i den sparsamma färgsättningen. För att spegla museet valde jag att i headern skriva
        ut namnen med typsnittet <i>tratex</i>, vilket är samma typsnitt som används på vägskyltar. Trots strukturering av CSS-koden till typsnittet finns fem varningar
        vid validering i terminalen (som jag inte tagit mig tid eller mod till att faktiskt redigera):<br />
        <i>me/kmom10/nvm/css/tratex/specimen_files/specimen_stylesheet.css<br />
        332:5  ✖  Unexpected shorthand "padding" after "padding-left"    declaration-block-no-shorthand-property-overrides<br />
        332:5  ✖  Unexpected shorthand "padding" after "padding-right"   declaration-block-no-shorthand-property-overrides<br />
        349:5  ✖  Unexpected shorthand "padding" after "padding-left"    declaration-block-no-shorthand-property-overrides<br />
        349:5  ✖  Unexpected shorthand "padding" after "padding-right"   declaration-block-no-shorthand-property-overrides<br />
        532:5  ✖  Unexpected shorthand "font" after "line-height"        declaration-block-no-shorthand-property-overrides<br /></i></p>

        <p>I headern finns även ett sökfält för sökning bland museets objekt, träfflistan presenteras med bilder, titel (som är klickbara), författare och kort utdrag
        från texten. Under sökfältet finns huvudmenyn som är begränsad till fyra artiklar: Start, Blekinges väghistoria, Sveriges väghistoria och Om Nättraby Vägmuseum.
        Innehållet på den sistnämnda av dessa är alla om-artiklar samlade, med undantag för <i>Nättraby Vägmuseum - om tillkomsten</i> (se ovan). Jag har även valt
        att inte ha med artikeln <i>kartor</i>, istället visas kartbilderna på varje objekts sida. Allt innehåll från databasen finns således med, även om utformning
        skiljer.</p>

        <p>Startsidan är kanske inte den mest inspirerande, men det är svårt att skapa innehåll för en verksamhet man inte känner till i någon större utsträckning. Hade
        jag inte missbedömt tiden hade startsidans uppräknande av vägmiljöerna varit klickbara, eller till och med bilder, som lett till objektens respektive sidor.
        Innehållet i artiklar och objekt strukturers med text till vänster och bilder till höger. Det är min uppfattning att läsbarheten på dessa sidor ökade i och med att
        bilderna placerades i en egen kolumn. På de sidor som inkluderar en GPS-position är denna klickbar och leder till sökning på koordinaterna i Goolge maps. Jag valde
        att inte ha objekten som en del av huvudmenyn, men ville samtidigt att de skulle vara lättillgängliga för besökaren. Således ligger det en dropdown-meny med museets
        objekt inledningsvis på varje sida  (i main men innan article), en central position på webbplatsen.</p>

        <p>I footern finns länkar till sidorna för källor, kontakt, presentation av mig samt dokumentation och rapport. Dessa kändes inte som primära för sidans innehåll
        varför jag lade dem i footern istället för i headern. Där finns även en knapp (pil) för att scrolla upp till toppen av sidan och länkar till validatorer för HTML och CSS (som hos mig enbart funkar i mozilla, inte i chrome).</p>

        <p><b>Krav 4:</b> Webbplatsen har en sökfunktion, dock söker den enbart bland objekten och inga alternativa sätt att presentera informationen på plats. Sökresultatet
        presenteras i en tabellstruktur likt den som använts i tidigare kursmoment. Tabellen innefattar bilder, titel, författare och inledningen på objektets innehåll
        (utan titel, som räknas bort med hjälp av substr() och strpos()).</p>

        <p><b>Genomförande:</b> Projektet tog mer tid i anspråk än jag räknat med. Inte för att jag upplevde dess delar som svåra, utan för att det är tidskrävande arbete.
        Ett sätt att minimera tidsåtgången hade varit att skriva alla delar från scratch, istället för att kopiera vissa filer från tidigare kursmoment. Upprensning och
        omstrukturering tog en del tid. Jag tycker det var en bra avslutande uppgift på kursen.</p>

        <p><b>Feedback:</b> Kursmaterialet tycker jag är bra, om än lite kryptiskt ibland då det känns som att formuleringar och progression i guiderna förutsätter en
        del av den kunskap de ämnar stödja en vid inhämtandet av. YouTube-filmerna tycker jag däremot är mycket bra! Jag skulle möjligen önska att de var uppdelade i fler
        kortare filmer och att de var textade. Jag kan också tänka att det finns både för och nackdelar med att forumet ligger på en helt öppen plattform. Fördelen är att
        frågor och svar kommer fler tilldels, men samtidigt kanske det hämmar deltagare som är osäkra på om deras frågor skulle kunna uppfattas som "dumma"?</p>

        <p>Överlag skulle jag ge kursen betyget 7 på en skala från 1-10, och jag skulle absolut kunna rekommendera den för vänner/kollegor som önskar få grundläggande kunskap
        i programmering för webb. Dock är jag inte säker på att jag skulle rekommendera den till någon som helt saknar tidigare kunskaper inom HTML och CSS.</p>

    </article>
</main>

<?php include("view/footer.php"); ?>
