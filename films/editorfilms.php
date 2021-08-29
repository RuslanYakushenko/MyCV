<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start();


if (!isset($_SESSION["id"])) {
    header("Location: /cv/admin.php");
} 

require "../database.php";

    $tablefilms = getAllFilms();
?>

<style>
#films {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#films td, #films th {
  border: 1px solid #ddd;
  padding: 8px;
}

#films tr:nth-child(even){background-color: #f2f2f2;}

#films tr:hover {background-color: #ddd;}

#films th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>

<ul><li><a href="/cv/admin.php">Главная</a></li></ul>


<table id="films">
    <tr>
        <th>Фильм ID</th>
        <th>Название Фильма</th>
        <th>Руйтинг</th>
        <th>Actions</th>    
    </tr>
    <?php foreach ($tablefilms as $film) {?>
        <tr>
            <td><?php echo $film['id'] ?></td>
            <td><?php echo $film['name'] ?></td>
            <td><?php echo $film['rating'] ?></td>
            <td>
                <a class="button" href="./delete.php?id=<?php echo $film['id']?>">delete</a>
                <a class="button" href="./update.php?id=<?php echo $film['id']?>">update</a>
                <a class="button" href="./view.php?id=<?php echo $film['id']?>">view</a>
            </td>
        </tr>
    <?php } ?>
</table>
