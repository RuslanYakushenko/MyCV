<?php
    require_once './functions.php';

    $films = [];

    $films[] = [
        'image' => './img/Captain_America_The_Winter_Soldier.jpg',
        'name' => 'Первый мститель',
        'genre' => ['Боевик', 'Приключения', 'Фантастика'],
        'rating' => '9.3',
        'description' => 'Стив Роджерс добровольно соглашается принять участие в эксперименте, который превратит его в суперсолдата, известного как Первый мститель. Роджерс вступает в вооруженные силы США вместе с Баки Барнсом и Пегги Картер, чтобы бороться с враждебной организацией ГИДРА, которой управляет безжалостный Красный Череп.',

    ];

    $films[] = [
        'image' => './img/IronMan2.jpg',
        'name' => 'Железный человек',
        'genre' => ['Боевик', 'Приключения', 'Фантастика'],
        'rating' => '7.9',
        'description' => 'У Тони Старка нет никаких суперспособностей. Его не обучали ниндзи, и он не умеет стрелять из лука. Все что у него есть, это огромное состояние родителей, харизма для продаж и технический талант создавать оружие. Хотя, для старта это не так уж и мало, так что герой фильма жил-поживал и проблем не знал. Пока злые дядьки не пробили у него в грудине дыру диаметром эдак с дыню и не взяли его в заложники. И вот теперь мужику надо как то выкручиваться.',
    ];

    $films[] = [
        'image' => './img/Джентльмены.jpg',
        'name' => 'Джентльмены',
        'genre' => ['Криминал', 'Комедия', 'Боевик'],
        'rating' => '8.5',
        'description' => 'Влиятельный гангстер из Лондона решает продать свой бизнес по справедливой цене. Но не все в его сфере уважают справедливость. Бандиты из разных частей света начинают охоту на «стареющего льва».',
    ];


    $books = [];

    $books[] = [
        'image' => './img/zhestkie-prodazhi-den-kennedi.png',
        'name' => 'Жесткие продажи',
        'genre' => ['Бизнес-книги'],
        'description' => 'В этой книге известнейшего бизнес-тренера Дэна Кеннеди изложены самые важные методики продаж. Они были вынесены из личного опыта, подсмотрены у суперуспешных профессионалов и отточены до совершенства клиентами Дэна с шести- и семизначным доходом. Это не то, что должно работать. А то, что действительно работает.',

    ];

    $books[] = [
        'image' => './img/bogatyy-papa-new.jpg',
        'name' => 'Богатый папа, бедный папа',
        'genre' => ['Бизнес-книги'],
        'description' => 'Книга "Богатый папа, бедный папа", написанная Робертом Кийосаки в соавторстве с Шэрон Лектер, предоставляет читателю знания о деньгах, которым определенно не научат в школе. Ее важнейший постулат: истинной ценностью являются активы, приносящие "пассивный" (т.е. не зависящий от работы) доход владельцу. Книга учит приобретать и накапливать доходные активы, чтобы обрести финансовую независимость.',

    ];

    $books[] = [
        'image' => './img/Golodnie-igri--I-vspixnet-plamya--Soyka-peresmeshnitsa_200.jpg',
        'name' => 'Голодные игры',
        'genre' => ['Зарубежная фантастика'],
        'description' => 'Главная героиня, Китнисс Эвердин становится добровольной участницей Голодных игр (жребий выпал её младшей сестре, но Китнисс, желая защитить её, вызывается на замену). Семья Китнисс проживает в бедном 12-м дистрикте, основной сырьевой базой которого является добыча угля[10]. Вместе со вторым участником из своего дистрикта — Питом Мелларком, Китнисс пытается не только выжить, но и привлечь зрителей, которые могут оказаться богатыми спонсорами.',

    ];

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
                                        
                        <div class="image"><img src ="<?php echo $i ['image'] ?>" width="200" alt=""></div>
                        <div class="content_section">
                            <h2>
                                <?php echo $i ['name'] ?>
                            </h2>
                            <div class="genre_style">
                                <?php foreach($i["genre"] as $filmsGenre) {?>
                                <a href=""><?php echo $filmsGenre?></a>
                                <?php } ?>
                            </div>
                            
                            
                            <?php

                            // foreach ($i["genre"] as )
                            //  echo implode('; ', $i ['genre']), "<br>"
                            ?>
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