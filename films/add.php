<?php

session_start();

if (!isset($_SESSION["id"])) {
    header("Location: /admin.php");
}
?>

<a href="/admin.php">Главная</a>

<h2>Добавление нового фильма</h2>

<form>
    
</form>