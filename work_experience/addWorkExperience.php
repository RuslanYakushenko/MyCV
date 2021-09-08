<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    session_start();

    if (!isset($_SESSION["id"])) {
        header("Location: /cv/admin.php");
    }
    
    require_once "./functionsWorkExperience.php";
    require_once "../database.php";

    $addNewWorkExperience = addNewWorkExperience($_POST);

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

    <h2>Добавление нового опыта работы</h2>
    <form action= "addWorkExperience.php"  method="POST">
    <p>
        Должность: <input name="Job_title" type="text" required placeholder="Обязательное поле" /> 
    </p>
    <p>
        Тип работы: <input name="type_of_work" type="text" required placeholder="Обязательное поле" /> 
    </p>
    <p>
        Рабочие часы: <input name="working_hours" type="text" required placeholder="Обязательное поле" /> 
    </p>
    <p>
        Опыт работы: <input name="work_experience_section_text" type="text" required placeholder="Обязательное поле" /> 
    </p>
    <p>
        <input type="submit" value="Отправить" >
    </p>
</body>
</html>