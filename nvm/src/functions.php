<?php

function destroySession()
{
    session_unset();
    session_destroy();
}

function connectToDatabase(string $dsn) : object
{
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>$dsn<br>";
        throw $e;
    }
    return $db;
}

function printSearchResultsetToHTMLTable($res)
{
    $imgPath = "img/80x80/";
    $rows = null;
    foreach ($res as $row) {
        $rows .= "<tr>";
        $rows .= "<td><img src='" . $imgPath . $row["image1"] . "' alt='" . $row["image1Alt"] . "' /></td>";
        $rows .= "<td width='150px'><b><a class='links' href='content.php?page=content&name=" . $row["name"] . "'>" . htmlentities($row['title']) . "</a></b></td>";
        $rows .= "<td width='100px'>Text: " . htmlentities($row['author']) . "</td>";
        $rows .= "<td>" . substr($row['data'], strpos($row['data'], '<p>'), 300) . " ... </td>";
        $rows .= "</tr>\n";
    }

    echo <<<EOD
    <table>
    $rows
    </table><br />
EOD;
}
