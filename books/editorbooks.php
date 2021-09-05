<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start();

if (!isset($_SESSION["id"])) {
    header("Location: /cv/admin.php");
} 

require "../database.php";
require "./functionsBooks.php";
require "../config.php";

$tablebooks = getAllBooks();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./css/editorbooks.css">
</head>
<body>

    <ul><li><a href="/cv/admin.php">Главная</a></li></ul>

    <table class= "tableBooks">
        <tr class="books_tr">
            <th class="books_th">ID</th>
            <th class="books_th">Название Книги</th>
            <th class="books_th">Actions</th>    
        </tr>
        <?php foreach ($tablebooks as $book) {?>
            <tr class="books_tr">
                <td class="books_td"><?php echo $book['id'] ?></td>
                <td class="books_td"><?php echo $book['name'] ?></td>
                <td class="books_td">
                    <a class="button" href="./delete.php?id=<?php echo $book['id']?>">delete</a>
                    <a class="button" href="./updateBooks.php?id=<?php echo $book['id']?>">update</a>
                    <a class="button" href="./view.php?id=<?php echo $book['id']?>">view</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>