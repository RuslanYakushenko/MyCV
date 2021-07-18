<?php
//    используеться для получения данных от пользователя
    // var_dump($_REQUEST);
//    var_dump($_GET);
//   var_dump($_POST);
    $name = $_POST['user_name'];
    
    
?>
<!DOCTYPE html>
<html lang="en">
    <body>
<!--    после отправки формы поблогодарить пользователя и -->
<!--    вывести сообщение "Спасибо имя пользователя. Мы с вами свяжемся в блежайшее время."-->
<!--    если форма содержит пустые значения вывести сообщние с ошибкой. "Заполните все поля формы"-->

<!-- План дз
1. Создать форму для заполнения
2. Создать переменную для хранения данных пользователя
3. Прописать условие для перехода на страницу с благодарностью или возврат на страницу формы с укакзнием того что нужно заполнить поле
    Условие: Если user_name содержит какие либо данные то перейти на стрницу с благодарностью где нужно вывести элемент user_name пользователя
    иначе вернуться на странцу формы с указанием заполнить поля -->
        <!-- <form action="./contact.php" method="post">
            Ваше имя: <input name="user_name" type="text" /><br>
            Ваш e-mail: <input name="user_email" type="email"/><br>
            Сообющение: <textarea name="message" cols="5" rows="5"> </textarea><br>
            <input  type="submit" value="Отправить">
        </form> -->

        

        <form action="./contact.php" method="post">
            <p>
               Ваше имя: <input name="user_name" type="text" pattern="^[А-Яа-яЁё\s]+$" title="Формат: A-z, А-я" required placeholder="Обязательное поле" /> 
            </p>
            <p>
                Почта: <input name="user_email" type="email" />
            </p>
            <p>
                Телефон: +38 <input name="user_number" type="phone" pattern="[0-9]{10,10}" title="Формат: 0-9" required placeholder="Обязательное поле" />
            </p>
            <p>
                Сообщение: <textarea name="message" cols="30" rows="10" required placeholder="Обязательное поле"></textarea> 
            </p>
            <p>
                <input type="submit" value="Отправить" >
            </p>
            
            <?php
                if($name >= 1) {
                    echo "Спасибо, " , $name , ", мы с вами свяжемся в ближайшее время." ;
                }

            ?>


        </form>
       

    </body>
</html>