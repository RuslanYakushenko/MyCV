<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once "../database.php";

function addNewSkills(array $skillsOptions)
{
    if (isset($skillsOptions["name"])) {

        $pdo = getConnection();

        $name = ($skillsOptions["name"]);

        $sql = "INSERT INTO skills (name) 
                    VALUES (:name)";

        $pdoStatement = $pdo->prepare($sql);

        $pdoStatement->bindParam(":name", $name);

        $pdoStatement->execute();

        // if($pdo->query($sql)){
        //     echo "Данные успешно добавлены";
        // } else{
        //     echo "Ошибка: " . $pdo->error;
        // }
        // $pdo->close();

    } 

}

function showSkills()
{
    $pdo = getConnection();
    // $sql = "SELECT (title_skills)
    //         FROM skills"

    $sql = "SELECT s.name
        FROM skills AS `s`
        INNER JOIN group_skills AS `gs` ON s.id = gs.id_skills
        INNER JOIN genres AS `g` ON g.id = gs.id_genre";

        $statemant = $pdo->prepare($sql);

        $statemant->execute();

        $statemant->setFetchMode(PDO::FETCH_ASSOC);

        $result = $statemant->fetchAll();

        return $result;
        
}

function ShowTechSkills()
{
    $pdo = getConnection();

    $sql = "SELECT s.name
    FROM skills AS `s`
    INNER JOIN group_skills AS `gs` ON s.id = gs.id_skills
    INNER JOIN genres AS `g` ON g.id = gs.id_genre";


}




?>