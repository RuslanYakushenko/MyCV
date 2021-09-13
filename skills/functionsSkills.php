<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once "../database.php";

function addNewSkills(array $skillsOptions)
{
    if (isset($skillsOptions["group_skills"]) && isset($skillsOptions["name_skills"])) {

        $pdo = getConnection();

        $group_skills = ($skillsOptions["group_skills"]);
        $name_skills = ($skillsOptions["name_skills"]);

        $sql = "INSERT INTO skills (name_skills, group_skills) 
                    VALUES (:name_skills, :group_skills)";

        $pdoStatement = $pdo->prepare($sql);

        $pdoStatement->bindParam(":group_skills", $group_skills);
        $pdoStatement->bindParam(":name_skills", $name_skills);

        $pdoStatement->execute();

        // if($pdo->query($sql)){
        //     echo "Данные успешно добавлены";
        // } else{
        //     echo "Ошибка: " . $pdo->error;
        // }
        // $pdo->close();

    } 

}

function getSoftSkills()
{
    $pdo = getConnection();

    $sql = "SELECT name_skills
    FROM skills WHERE group_skills= 'Soft Skills'";
    $pdoStatement = $pdo->prepare($sql);
    
    $pdoStatement->execute();

    $pdoStatement->setFetchMode(PDO::FETCH_ASSOC);

    $result = $pdoStatement->fetchAll();

    return is_array($result) ? $result : null;
};








?>