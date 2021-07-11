<?php
//    используеться для получения данных от пользователя
    var_dump($_REQUEST);
//    var_dump($_GET);
//    var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">
    <body>
<!--    после отправки формы поблогодарить пользователя и -->
<!--    вывести сообщение "Спасибо имя пользователя. Мы с вами свяжемся в блежайшее время."-->
<!--    если форма содержит пустые значения вывести сообщние с ошибкой. "Заполните все поля формы"-->
        <form action="./contact.php" method="post">
            Ваше имя: <input name="user_name" type="text" /><br>
            Ваш e-mail: <input name="user_email" type="text"/><br>
            Сообющение: <textarea name="message" cols="5" rows="5"> </textarea><br>
            <input  type="submit" value="Отправить">
        </form>
    </body>
</html>