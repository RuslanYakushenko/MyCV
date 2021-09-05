<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start();



if (!isset($_SESSION["id"])) {
    header("Location: /cv/admin.php");
}

require_once "./functionsBooks.php";
require_once "../database.php";

$addNewBooks = addNewBooks();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="/cv/admin.php">Главная</a>


<h2>Добавление новой книги</h2>
<form action= "addBooks.php"  method="POST">
    <p>
        Изображение: <input name="image" type="text" required placeholder="Обязательное поле" /> 
    </p>
    <p>
        Название: <input name="name" type="text" required placeholder="Обязательное поле" /> 
    </p>
    <p>
        Описание: <input name="description" type="text" required placeholder="Обязательное поле" /> 
    </p>
    <p>
        <input type="submit" value="Отправить" >
    </p>
    
</body>
</html>