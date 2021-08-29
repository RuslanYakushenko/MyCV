<?php 
    require "../config.php";
    require "../database.php";

    $filmId = $_REQUEST['id'] ?? null;
    if ($filmId === null)
    {
        echo "ERROR: film_id is required";
        exit;      
    }

    $film = getFilmById($filmId);
    if ($film === null) {
        echo "ERROR: film not found";
        exit;   
    }

    $updateFields = $_POST;

    if (isset($_FILES['poster']) && !empty($_FILES['poster']['tmp_name'])) {
        $tmpName = $_FILES['poster']['tmp_name'];
        $fileName = $_FILES['poster']['name'];
        $path = IMAGE_PATH . "/" . $fileName;

        move_uploaded_file($tmpName, $path);

        $updateFields['image_url'] = IMAGE_URL . $fileName;    
    }

    if (updateFilm($filmId, $updateFields)) {
        echo "Фильм обновлен";    
        $film = getFilmById($filmId);
    }
?>

<html>
<form action="./update.php?id=<?php echo $filmId?>" method="POST" enctype="multipart/form-data">
    <p>
        Название: <input name="name" type="text" value="<?php echo $film['name']?>" required placeholder="Обязательное поле" /> 
    </p>
    <p>
        Рейтинг: 
        <select name="rating">
            <option value="1" <?php echo $film['rating'] == 1 ? "selected" : ""?>>1</option>
            <option value="2" <?php echo $film['rating'] == 2 ? "selected" : ""?>>2</option>
            <option value="3" <?php echo $film['rating'] == 3 ? "selected" : ""?>>3</option>
            <option value="4" <?php echo $film['rating'] == 4 ? "selected" : ""?>>4</option>
            <option value="5" <?php echo $film['rating'] == 5 ? "selected" : ""?>>5</option> 
        </select>
    </p>
    <p>
        Описание: 
        <textarea name="description" cols="30" rows="5">
            <?php echo $film['description']?>
        </textarea>
    </p>
    <p>
        Изображение: <input type="file" name="poster"/>
        <img width="200px" src="<?php echo $film['image_url']?>" />
    </p>
    <p>
        Год: <input name="year" type="text" value="<?php echo $film['year']?>" required placeholder="Обязательное поле" /> 
    </p>
    <p>
        Бюджет: <input name="budget" type="text" value="<?php echo $film['budget']?>" required placeholder="Обязательное поле" /> 
    </p>
    <p>
        <input type="submit" value="Отправить" >
    </p>
</form>
</html>