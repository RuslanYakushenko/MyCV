<?php
    require_once './functions.php';
    require_once './database.php';

    $films = getAllFilms();

    $books = getAllBooks();


    $series = [];

    $series[] = [
        'image' => './img/9f5740a92_200x300.jpg',
        'name' => 'Острые Козырьки',
        'genre' => ['Драма', 'Криминал'],
        'rating' => '9.3',
        'description' => ' Криминальная британская сага о становлении в Бирмингеме 20-х годов одной из опаснейших преступных группировок города «Острые козырьки». В основе гангстерской драмы лежит реальная история жестокой и влиятельной банды послевоенного времени. ',
    ];



    // $series[] = [
    //     'image'=> './img/',
    //     'name' =>
    //     'genre' =>
    //     'rating' =>
    //     'description' =>
    // ];

    // $series[] = [
    //     'image'=> './img/',
    //     'name' =>
    //     'genre' =>
    //     'rating' =>
    //     'description' =>
    // ];

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/hobbies_page.css">

    
</head>
<body>
        <h2 class="index_php">
            <a href="index.php"> < Назад</a>
        </h2>
    <!-- Main container -->
    <div class="main_conteiner">

        <!-- Мои любимые фильмы -->
                <?php getWelcomeMessage(date('H'))?>
           
                <h2 class="name_groop">Любимые фильмы</h2>
                <?php
                foreach ($films as $i) { ?>
                                        
                        <div class="image"><img src ="<?php echo $i ['image_url'] ?>" width="200" alt=""></div>
                        <div class="content_section">
                            <h2>
                                <?php echo $i ['name'] ?>
                            </h2>
                            
                            
                            <div class="genre_style">
                                <?php                               
                                    echo $i ['genre_name'];
                                    // foreach ($i["genre_name"] as $filmsGenre)
                                    //     echo implode('; ', $i ['genre']), "<br>"
                                ?>
                            </div>
                            <?php
                        
                                if ($i['rating'] <= 4) {
                                    $class = "red";
                                }
                                elseif ( $i['rating'] <= 8) {
                                    $class = "yellow";
                                }
                                else 
                                    $class = "green";
                                
                            
                            ?>
                            <span class="<?php echo $class ?>">
                                <?php echo $i['rating'] , "<br>" ?>
                            
                            </span>
                            <p>
                                <?php 
                                
                                echo mb_substr($i ['description'], 0, 250). "..." 
                                ?>
                            </p>
                            </span>
                        </div>
                    
                <?php } ?>       
           
                <hr class="hr-double">

        <!-- Мои любиме книги -->
        <div>
            
                <?php
                foreach ($books as $book) { ?>
                    <div>
                        
                            <img src ="<?php echo $book ['image'] ?>" width="200" alt="">

                        <div class="">
                                <h3><?php echo $book ['name'], "<br>" ?></h3>
                            <div>
                                <?php foreach($book['genre'] as $bookGenre) {?>
                                    <a href=""><?php echo $bookGenre?></a>
                                <?php } ?>
                            </div>
                            
                            
                            <?php echo ( mb_substr ($book['description'], 0, 250 )). "..."; ?>
                        </div>
                        
                    </div>
                <?php } ?>
            

        </div>


        <div>
            <?php 
            foreach ($series as $i) {?>
            
            <img src="<?php echo $i['image']?>" width="200"  alt="">
            <h3><div><?php echo $i['name'] ?></div></h3>

            <?php foreach($i['genre'] as $seriesGenre) {?>
                 <a href=""><?php echo $seriesGenre?> </a>
                <?php } ?>
            
            <div><?php echo(mb_substr($i['description'], 0 , 250)). "..."?></div>

            <?php } ?>
        </div>
    

    
        
</body>
</html>