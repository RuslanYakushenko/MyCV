<?php

session_start();



if (!isset($_SESSION["id"])) {
    header("Location: /cv/admin.php");
}



// $name = $_POST['name'];
// $rating = $_POST['rating'];
// $descripion = $_POST['descripion'];
// $image_url = $_POST['image_url'];
// $year = $_POST['year'];
// $budget = $_POST['budget'];

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

<h2>Добавление нового фильма</h2>
<form action="addnewFilms.php" method="POST">
    <p>
        Название: <input name="name" type="text" required placeholder="Обязательное поле" /> 
    </p>
    <p>
        Рейтинг: <input name="rating" type="text" required placeholder="Обязательное поле" /> 
    </p>
    <p>
        Описание: <input name="description" type="text" required placeholder="Обязательное поле" /> 
    </p>
    <p>
        Изображение: <input name="image_url" type="text" required placeholder="Обязательное поле" /> 
    </p>
    <p>
        Год: <input name="year" type="text" required placeholder="Обязательное поле" /> 
    </p>
    <p>
        Бюджет: <input name="budget" type="text" required placeholder="Обязательное поле" /> 
    </p>
    <p>
        <input type="submit" value="Отправить" >
    </p>

    
</form>
</body>
</html>

