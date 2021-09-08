<?php
require_once "../database.php";

function addNewProjects(array $ProjectsOptions) 
{
    if (isset ($ProjectsOptions['name']) && isset ($ProjectsOptions['url']) && isset ($ProjectsOptions['tools']) && isset ($ProjectsOptions['cssStyle'])){

    $pdo = getConnection();

    $sql = "INSERT INTO projects (name, url, tools, cssStyle)
            VALUES (:name, :url, :tools, :cssStyle)";
    
    $pdoStatement = $pdo->prepare($sql);

    $pdoStatement->bindParam(":name", $ProjectsOptions['name']);
    $pdoStatement->bindParam(":url", $ProjectsOptions['url']);
    $pdoStatement->bindParam(":tools", $ProjectsOptions['tools']);
    $pdoStatement->bindParam(":cssStyle", $ProjectsOptions['cssStyle']);
    
    $pdoStatement->execute();
}
else {
    echo "Заполните все поля";
    }

} 

function getProjectByName($projectName)
{
    // Подключение к базе данных
    $pdo = getConnection();
    
    // Запрос в базу данных
    $sql = "SELECT * FROM projects 
            WHERE `name` = :name";

    // Формируем обьект запроса (prepare = приготовить)
    $pdoStatement = $pdo->prepare($sql);

    // Связываем значение :name и Массив (bindParam = всязать значения)
    $pdoStatement->bindParam(":name", $projectName);
    
    // Выполняем запрос (execut = выполнить)
    $pdoStatement->execute();

    // Устанвливаем формат возращаемых данных
    $pdoStatement->setFetchMode(PDO::FETCH_ASSOC);
    
    // Получаем данные запроса (fetch = вернуть одну строку, fetchAll = получаем все)
    $result = $pdoStatement->fetchAll();
    
    // возвращаем данные запроса (return = вернуть)
    return $result;
}
?>