<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    require "../config.php";
    require "../database.php";

    $bookId = $_REQUEST['id'] ?? null;
    if ($bookId === null) {
        echo "ERROR: book_id is required";
        exit;
    }

    
?>