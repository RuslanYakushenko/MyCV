<?php


function getAllFilms()
{
    try {

        //подключение к базе данных
        $pdo = new PDO('mysql:host=percona_db;dbname=my_cv;charset=utf8', 'root', 'root');
        
        ///текст запроса
        $sql = "SELECT * FROM films LIMIT 2";
    
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


