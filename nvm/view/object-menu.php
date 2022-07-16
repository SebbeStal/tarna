<div class="dropdown">
    <div onclick="myFunction()" class="dropbtn">Museumobjekt<div style="float: right;"><i class="arrowDown"></i></div></div>
    <div id="myDropdown" class="dropdown-content">
        <?php
        $db = connectToDatabase($dsn1);

        $stmt = $db->prepare("SELECT name, title FROM object");
        $stmt->execute();

        $res = $stmt->fetchAll();

        $uriFile = basename($_SERVER["REQUEST_URI"]);
        ?>

        <?php foreach ($res as $value) : ?>
            <a href="content.php?page=content&name=<?= $value["name"] ?>"><?= $value["title"] ?></a>
        <?php endforeach; ?>
    </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
</script>
