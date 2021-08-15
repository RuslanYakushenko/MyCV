<?php


function getAllFilms()
{
    try {

        //подключение к базе данных
        $pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root','');
        
        ///текст запроса
        // $sql = "SELECT * FROM films LIMIT 3";
        $sql = "SELECT f.name, f.rating, f.description, f.image_url, GROUP_CONCAT(g.genre) AS genre_name
        FROM films AS `f`
        INNER JOIN films_ganres AS `fg` ON f.id = fg.film_id
        INNER JOIN genres AS `g` ON g.id = fg.genre_id       
        GROUP BY f.name, f.rating, f.description, f.image_url";
        
    
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


        $sql = "SELECT b.image, b.name, b.description, GROUP_CONCAT(g.genre) AS genre_name
        FROM books AS `b`
        INNER JOIN books_genres AS `bg` ON b.id = bg.book_id
        INNER JOIN genres AS `g` ON g.id = bg.genre_id       
        GROUP BY b.image, b.name, b.description";

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

?>

