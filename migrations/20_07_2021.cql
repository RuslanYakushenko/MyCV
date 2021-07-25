CREATE TABLE `test`.`films` ( 
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(123) UNSIGNED NOT NULL , 
    `genre` VARCHAR(123) UNSIGNED NOT NULL , 
    `rating` FLOAT(3) UNSIGNED NOT NULL , 
    `description` TEXT UNSIGNED NOT NULL , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

