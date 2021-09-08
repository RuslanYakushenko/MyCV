<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once "../database.php";


function addNewWorkExperience(array $NewWorkExperience)
{
    if (isset($NewWorkExperience["Job_title"]) && isset($NewWorkExperience["type_of_work"]) && isset($NewWorkExperience["working_hours"]) && isset($NewWorkExperience["work_experience_section_text"])) {

        $pdo = getConnection();

        $Job_title = ($NewWorkExperience["Job_title"]);
        $type_of_work = ($NewWorkExperience["type_of_work"]);
        $working_hours = ($NewWorkExperience["working_hours"]);
        $work_experience_section_text = ($NewWorkExperience["work_experience_section_text"]);

        $sql = "INSERT INTO work_experience (Job_title, type_of_work, working_hours, work_experience_section_text) 
                    VALUES (:Job_title, :type_of_work, :working_hours, :work_experience_section_text)";
        
        $pdoStatement = $pdo->prepare($sql);

        $pdoStatement->bindParam(":Job_title", $Job_title);
        $pdoStatement->bindParam(":type_of_work", $type_of_work);
        $pdoStatement->bindParam(":working_hours", $working_hours);
        $pdoStatement->bindParam(":work_experience_section_text", $work_experience_section_text);
       
        $pdoStatement->execute();

    } 
    
}
?>