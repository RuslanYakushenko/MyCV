<?php

require_once "../database.php";

function addNewBooks(array $bookOptions)
{
    if (isset($bookOptions["image"]) && isset($bookOptions["name"]) && isset($bookOptions["description"])) {

        $pdo = getConnection();

        $image = ($bookOptions["image"]);
        $name = ($bookOptions["name"]);
        $description = ($bookOptions["description"]);

        $sql = "INSERT INTO books (image, name, description) 
                    VALUES ('$image', '$name', '$description')";

        

        if($pdo->query($sql)){
            echo "Данные успешно добавлены";
        } else{
            echo "Ошибка: " . $pdo->error;
        };

    } else {
        throw new RuntimeException("image, name, description are required");
    }
}



?>


