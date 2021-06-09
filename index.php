<?php
    $myName = "Руслан Якушенко";
    $date = date("M Y");
    $myProjectsHeading = "Projects";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My resume</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Main container -->
    <div class="main_conteiner">
        <!-- sidebar section -->
        <aside class="sidebar_section"> 
            <img src="http://localhost/cv/img/2021-04-19.jpeg" width="370" height= "250" alt="My photo">
            <!-- contacts section -->

            <div class="contacts_section">
                <h3 class="sidebar_tittle">Контакты</h3>
                <div>
                    <span class="contacts_section_type">Телефон:</span>
                    <a class="contacts_section_link" href="tel:+380507101116">+38(050)710-11-16</a>
                </div>
                <div>
                    <span class="contacts_section_type">Mail:</span>
                    <a class="contacts_section_link" href="mailto:ruslan.yakushenko.1998@gmail.com">ruslan.yakushenko.1998@gmail.com</a>
                </div>
            </div>

            <!-- tech skills section -->
            <div class="tech_skills_section">
            
                <h3 class="sidebar_tittle">Tech Skills</h3>
                <ul class="skills_list">
                    <li class="skills_item"> <span class="skills_item_text" >HTML5</span></li>
                    <li class="skills_item"> <span class="skills_item_text" >CSS3</span></li>
                    <li class="skills_item"> <span class="skills_item_text" >PHP</span></li>
                    <li class="skills_item"> <span class="skills_item_text" >Wordpress</span></li>
                </ul>
            </div>

            <!-- Soft Skills section -->
            <div class="soft_skills_section">
                <h3 class="sidebar_tittle">Soft Skills</h3>
                <ul class="skills_list">
                    <li class="skills_item"> <span class="skills_item_text" >Scrum</span></li>
                    <li class="skills_item"> <span class="skills_item_text" >Agile</span></li>
                    <li class="skills_item"> <span class="skills_item_text" >GTD</span></li>
                    <li class="skills_item"> <span class="skills_item_text" >Teamwork</span></li>
                    <li class="skills_item"> <span class="skills_item_text" >Management</span></li>
                </ul>
            </div>
        </aside>
        <!-- Main content section -->
        <div class="main_content_section">
                <!-- About me section -->  
            <div class="about_me_section">

                <h2 class="about_me_profession">Frount-End Developer</h2>
                <h1 class="about_me_name"><?php echo $myName ?></h1>

                <p class="about_me_description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                My age
                    <?php 
                        $age = DateTime::createFromFormat('d/m/Y', '28/07/1998')
                        ->diff(new DateTime('now'))
                        ->y;
                        echo $age; 
                    ?>.  
                    </p>
            </div>

            

            <!-- My projects section -->
            <div class="projects_section">
                <h3 class="my_projects_heading"><?php echo $myProjectsHeading ?> </h3>
                <ol class="my_projects_list">
                    <li class="my_progects_item"> 
                        <span class="my_projects_text"> 
                            <a href=http://distributor.dp.ua class="my_projects_link">http://distributor.dp.ua</a>
                            ........
                            <span class="my_progects_brackets">[</span> HTML5, CSS3 <span class="my_progects_brackets">]</span>
                        </span>
                    </li>
                </ol>
            
            </div>





            <!-- My work experience section -->
            <div class="work_experience_section">
                <h3 class="title_section">Work Experience</h3>
                    <!-- Company 1 -->
                    <div class="Front_End_Developer_Freelance_section">
                        <h4 class="Job_title">Front-End Developer <span class="type_of_work">Freelance</span></h4>      
                        <p class="working_hours">September 2019 - up to now   <span class="working_hours_delimiter">|</span>    Country</p>

                        <ul class="work_experience_section_text">
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>Risus commodo viverra maecenas. </li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</li>
                        </ul>  
                    </div>

                    

                    <!-- Company 2 -->
                    <div>
                        <h4 class="Job_title">Manager <span class="type_of_work">Roga & Kopyta LLC</span></h4>
                        <p class="working_hours">SJune 2014 - February 2015   <span class="working_hours_delimiter">|</span>    Country</p>

                        <ul class="work_experience_section_text">
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            <li>Quis ipsum suspendisse ultrices gravida.</li>
                            <li>Risus commodo viverra maecenas. </li>
                        </ul>  
                    </div>


                
                    <!-- Company 3 -->
                    <div>
                        <h4 class="Job_title">Manager <span class="type_of_work">Roga & Kopyta LLC</span></h4>
                        <p class="working_hours">SJune 2014 - February 2015   <span class="working_hours_delimiter">|</span>   Country</p>

                        <ul class="work_experience_section_text">
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            <li>Quis ipsum suspendisse ultrices gravida.</li>
                            <li>Risus commodo viverra maecenas. </li>
                        </ul>  
                    </div>     
            
            </div>




            <!-- My educetion section -->
                <div class="my_educetion_section">
                    <h3 class="title_section">Education</h3>
                    <h3 class="National_University_of_Radioelectronics">National University of Radioelectronics</h3>
                    <h4 class="my_educetion_section_managment">Management</h4>
                    <p class="my_educetion_section_date">September 2009 - <?php echo $date?>   <span class="working_hours_delimiter">|</span>   Country</p>
                </div>
            
        

        
        </div>
    
    </div>
</body>
</html>