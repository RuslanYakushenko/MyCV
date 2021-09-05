<?php

function getAllFilms()
{
    try {

        //подключение к базе данных
        $pdo = getConnection();
        
        ///текст запроса
        // $sql = "SELECT * FROM films LIMIT 3";
        $sql = "SELECT f.id, f.name, f.rating, f.description, f.image_url, GROUP_CONCAT(g.genre) AS genre_name
        FROM films AS `f`
        INNER JOIN films_ganres AS `fg` ON f.id = fg.film_id
        INNER JOIN genres AS `g` ON g.id = fg.genre_id       
        GROUP BY f.id, f.name, f.rating, f.description, f.image_url";
        
    
        ///формируем объект запроса
        $statemant = $pdo->prepare($sql);
    
        ///выполняем запрос
        $statemant->execute();
    
        //устанавливаем режим для результата
        $statemant->setFetchMode(PDO::FETCH_ASSOC);
    

        ///получаем все строкb
        $result = $statemant->fetchAll();

        return $result;
    
        ///построчное получение
        // while ($result = $statemant->fetch(PDO::FETCH_ASSOC)) {
        //     echo '<pre>';
        //     ///получаем все строкb
        //     var_dump($result);
        //     echo '</pre>'; 
        // }
    
    } catch (Exception $ex) {
        var_dump($ex->getMessage());
    }
    
    return [];
}


function getAllBooks()
{
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root','');


        $sql = "SELECT b.id, b.image, b.name, b.description, GROUP_CONCAT(g.genre) AS genre_name
        FROM books AS `b`
        INNER JOIN books_genres AS `bg` ON b.id = bg.book_id
        INNER JOIN genres AS `g` ON g.id = bg.genre_id       
        GROUP BY b.id, b.image, b.name, b.description";

        $statemant = $pdo->prepare($sql);
    
        $statemant->execute();
    
        $statemant->setFetchMode(PDO::FETCH_ASSOC);
    

        $result = $statemant->fetchAll();

        return $result;

    
    }   catch (Exception $ex) {
            var_dump($ex->getMessage());
        }
    
    return [];

}

function getUser($login)
{
    $pdo = getConnection();

    $sql = "SELECT * FROM users WHERE login = :login";

    $statemant = $pdo->prepare($sql);
    $statemant->bindValue(':login', $login);

    $statemant->execute();
    $statemant->setFetchMode(PDO::FETCH_ASSOC);

    $result = $statemant->fetch();

    return !empty($result) ? $result : null;

}

function getConnection()
{
    $host = "localhost";
    $pass = "";
    $user = "root";
    $dbName = "test";

    // $host = "percona_db";
    // $pass = "root";
    // $user = "root";
    // $dbName = "my_cv";

    $pdo = new PDO('mysql:host=' . $host .';dbname='. $dbName .';charset=utf8', $user, $pass);
    return $pdo;
}

function AddNewFilms()
{
    if (isset($_POST["name"]) && isset($_POST["rating"]) && isset($_POST["descripion"]) && isset($_POST["image_url"]) && isset($_POST["year"]) && isset($_POST["budget"])) {
            
        $pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root','');

        if($pdo->connect_error){
            die("Ошибка: " . $pdo->connect_error);
        }
        
        $name = $pdo->real_escape_string($_POST['name']);
        $rating = $pdo->real_escape_string($_POST['rating']);
        $descripion = $pdo->real_escape_string($_POST['descripion']);
        $image_url = $pdo->real_escape_string($_POST['image_url']);
        $year = $pdo->real_escape_string($_POST['year']);
        $budget = $pdo->real_escape_string($_POST['budget']);

        $sql = "INSERT INTO films ('name','rating','descripion','image_url','year','budget',) 
                VALUES ('$name', $rating, $descripion, $image_url, $year, $budget)";
        if($pdo->query($sql)){
            echo "Данные успешно добавлены";
        } else{
            echo "Ошибка: " . $pdo->error;
        }
        $pdo->close();
    }
}


// function AddTablesFilms()
// {
//     try{
//         $pdo = getConnection();
//         $sql = "SELECT f.id, f.name, f.rating, GROUP_CONCAT(g.genre) AS genre_name
//         FROM films AS `f`
//         INNER JOIN film_ganres AS `fg` ON f.id = fg.film_id
//         INNER JOIN genres AS `g` ON g.id = fg.genre_id       
//         GROUP BY f.id, f.name, f.rating, f.image_url";
        
//         $statemant = $pdo->prepare($sql);

//         $statemant->execute();

//         $statemant->setFetchMode(PDO::FETCH_ASSOC);

//         $result = $statemant->fetchAll();

//         return $result;
//     }
//     catch (Exception $ex) {
//         var_dump($ex->getMessage());
//     }
        
// }


function getFilmById($filmId)
{
    $pdo = getConnection();

    $sql = "SELECT * FROM films WHERE id = :id";
    $pdoStatement = $pdo->prepare($sql);

    $pdoStatement->bindParam(":id", $filmId);
    $pdoStatement->execute();

    $pdoStatement->setFetchMode(PDO::FETCH_ASSOC);

    $result = $pdoStatement->fetch();

    return is_array($result) ? $result : null;
}


/**
 * $data = ['name_column' => value]
 * */

function updateFilm($filmId, array $data)
{
    $params = [];
    $updateColumns = [];

    foreach ($data as $nameColumn => $value) {
        $key = ":" . $nameColumn;
        $updateColumns[] = "$nameColumn = $key";
        $params[$key] = $value;
    }

    $sql = "UPDATE films SET " . implode(", ", $updateColumns) . " WHERE id = :id";
    
    $pdo = getConnection();
    $pdoStatement = $pdo->prepare($sql);

    $pdoStatement->bindParam(":id", $filmId);
    foreach ($params as $key => $value) {
        $pdoStatement->bindValue($key, $value);
    }

    $pdoStatement->execute();

    return true;
}



function DeleteFilms(){
    $pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root','');
    $film = $_POST["id"];
    $sql = "DELETE FROM films WHERE id = '$film'";

}
?>









