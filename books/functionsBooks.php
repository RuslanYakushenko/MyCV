<?php

require_once "../database.php";

function addNewBooks() 
{
    if (isset($_POST["image"]) && isset($_POST["name"]) && isset($_POST["description"])) {

    $pdo = getConnection();

    $image = ($_POST["image"]);
    $name = ($_POST["name"]);
    $description = ($_POST["description"]);

    $sql = "INSERT INTO books (image, name, description) 
                VALUES ('$image', '$name', '$description')";
        if($pdo->query($sql)){
            echo "Данные успешно добавлены";
        } else{
            echo "Ошибка: " . $pdo->error;
        };

    }
}



?>


