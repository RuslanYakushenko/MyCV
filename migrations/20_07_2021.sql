CREATE TABLE `films` ( 
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(128) NOT NULL , 
    `rating` FLOAT(10, 2) UNSIGNED NOT NULL , 
    `description` TEXT NOT NULL , 
    `image_url` VARCHAR(256) NOT NULL , 
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

CREATE TABLE `genres` ( 
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
     `genre` VARCHAR(128) NOT NULL ,
      PRIMARY KEY (`id`)
     ) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

CREATE TABLE `film_ganres` (
     `id` INT(11) NOT NULL AUTO_INCREMENT ,
      `film_id` INT(11) NOT NULL ,
      `genre_id` INT(11) NOT NULL ,
       PRIMARY KEY (`id`), 
       UNIQUE `uniq_film_id_genre_id` (`film_id`, `genre_id`)) ENGINE = InnoDB;
