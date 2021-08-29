<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start();


if (!isset($_SESSION["id"])) {
    header("Location: /cv/admin.php");
} 

require "../database.php";

$tablefilms = AddTablesFilms();



?>

<ul><li><a href="/cv/admin.php">Главная</a></li></ul>



<?php foreach ($tablefilms as $film) {?>
    <div>
        <?php echo $film['id'] ?>
        <?php echo $film['name'] ?>
        <?php echo $film['rating'] ?>
        <button><a href="./delete.php?id=<?php echo $film['id']?>">delete</a></button>
        <!-- Ссылка не работала?? <a href="/films/delete.php?id=...... -->
    </div>
<?php } ?>