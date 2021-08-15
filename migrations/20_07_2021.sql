CREATE TABLE `films` ( 
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(128) NOT NULL , 
    `rating` FLOAT(10, 2) UNSIGNED NOT NULL , 
    `description` TEXT NOT NULL , 
    `image_url` VARCHAR(256) NOT NULL , 
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;


CREATE TABLE `test`.`genres` ( 
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , 
    `genre` VARCHAR(128) NOT NULL , 
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

CREATE TABLE `test`.`films_ganres` ( 
    `id` INT(11) NOT NULL AUTO_INCREMENT ,
    `film_id` INT(11) NOT NULL , 
    `genre_id` INT(11) NOT NULL , 
    PRIMARY KEY (`id`),
     UNIQUE `uniq_film_id_genre_id` (`film_id`, `genre_id`), 
     UNIQUE `uniq_genre_id` (`genre_id`)
    ) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;


CREATE TABLE `test`.`contact_form` ( 
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , 
    `user_name` VARCHAR(128) NOT NULL , 
    `user_email` VARCHAR(128) NOT NULL , 
    `user_number` INT(22) UNSIGNED NOT NULL , 
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

CREATE TABLE `test`.`message_form` ( 
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
    `id_contact_form` INT(11) UNSIGNED NOT NULL ,
    `message` TEXT NOT NULL ,
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;



CREATE TABLE `test`.`books` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , 
    `image` VARCHAR(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
    `name` VARCHAR(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
    `description` TEXT NOT NULL , 
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;

CREATE TABLE `test`.`books_genres` ( 
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , 
    `book_id` INT(11) UNSIGNED NOT NULL , 
    `genre_id` INT(11) UNSIGNED NOT NULL , 
    PRIMARY KEY (`id`), 
    UNIQUE `uniq_book_id_genre_id` (`book_id`, `genre_id`)
    ) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

