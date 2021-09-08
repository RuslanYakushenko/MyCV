<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    require_once "../database.php";

    function addNewEducation(array $NewEducation)
    {
        if (isset($NewWorkExperience["Educational_establishment"]) && isset($NewWorkExperience["specialization"]) && isset($NewWorkExperience["studying_time"])){
            $pdo = getConnection();

            $Educational_establishment = ($NewEducation["Educational_establishment"]);
            $Educational_establishment = ($NewEducation["specialization"]);
            $Educational_establishment = ($NewEducation["studying_time"]);

            $sql = "INSERT INTO education (Educational_establishment, specialization, studying_time) 
                    VALUES (:Educational_establishment, :specialization, :studying_time)";

            $pdoStatement = $pdo->prepare($sql);

            $pdoStatement->bindParam(":Educational_establishment", $Educational_establishment);
            $pdoStatement->bindParam(":specialization", $specialization);
            $pdoStatement->bindParam(":NewEducation", $NewEducation);

            $pdoStatement->execute();

        }
    }
?>