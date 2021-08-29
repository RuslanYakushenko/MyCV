<?php

session_start();

require "./database.php";

if (!isset($_SESSION["id"]) && !empty($_POST)) {
    $login = $_POST["login"];
    $password = $_POST["password"];

    $user = getUser($login);
    if ($user == null) {
        echo "Пользователь не найден";
    } elseif ($user["password"] == md5($password)) {
        $_SESSION["id"] = $user["id"];
        $_SESSION["user_name"] = $user["user_name"];       
    } else {
        echo "Неверный пароль";
    }
}
?>

<?php if (!isset($_SESSION["id"])) {?>

<form method="post" action="./admin.php">
    <label>Login</label>
    <input type="text" name="login"/>
    <label>Password</label>
    <input type="password" name="password"/>
    <input type="submit" value="login"/>
</form>
<?php } else {?>
    <?php echo "Welcome " . $_SESSION["user_name"]; ?>
    
    
    <!-- реализоват добавление новых фильмов, изминение фильма, удаление. -->
    <ul>
        <li><a href="/cv/films/add.php">Добавить фильм</a></li>
        <li><a href="/cv/films/editorfilms.php">Редактирование фильмов</a></li>
        
    </ul>

<?php }?>
