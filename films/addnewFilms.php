<?php
    if (isset($_POST["name"]) && isset($_POST["rating"]) && isset($_POST["description"]) && isset($_POST["image_url"]) && isset($_POST["year"]) && isset($_POST["budget"])) {
            
        $conn = new mysqli('localhost','root','','test');

        if($conn->connect_error){
            die("Ошибка: " . $conn->connect_error);
        }
        
        $name = $conn->real_escape_string($_POST['name']);
        $rating = $conn->real_escape_string($_POST['rating']);
        $description = $conn->real_escape_string($_POST['description']);
        $image_url = $conn->real_escape_string($_POST['image_url']);
        $year = $conn->real_escape_string($_POST['year']);
        $budget = $conn->real_escape_string($_POST['budget']);

        $sql = "INSERT INTO films (name, rating, description, image_url, year, budget) 
                VALUES ('$name', '$rating', '$description', '$image_url', '$year', '$budget')";
        if($conn->query($sql)){
            echo "Данные успешно добавлены";
        } else{
            echo "Ошибка: " . $conn->error;
        }
        $conn->close();
    }
?>

