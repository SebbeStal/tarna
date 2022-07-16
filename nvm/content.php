<?php
/**
 * This is a page controller for a multipage. You should name this file
 * as the name of the pagecontroller for this multipage. You should then
 * add a directory with the same name, excluding the file suffix of ".php".
 * You then then have several multipages within the same directory, like this.
 *
 * multipage.php
 * multipage/
 *
 * some-test-page.php
 * some-test-page/
 */

// Get what subpage to show, defaults to index
$pageReference = $_GET["page"] ?? "content";
// Get the filename of this multipage, exkluding the file suffix of .php
$base = basename(__FILE__, ".php");
// Create the collection of valid sub pages.
$pages = [
    "content" => [
        "title" => "Innehåll",
        "file" => __DIR__ . "/$base/content.php",
    ],
];
// Get the current page from the $pages collection, if it matches
$page = $pages[$pageReference] ?? null;
// Base title for all pages and add title from selected multipage
$title = $page["title"] ?? "404";
$title .= " | Nättraby vägmuseum";
// Render the page
require __DIR__ . "/view/header.php";
require __DIR__ . "/view/content.php";
require __DIR__ . "/view/footer.php";
