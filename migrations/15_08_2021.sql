CREATE TABLE `test`.`projects` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
    `name` VARCHAR(128) NOT NULL , 
    `url` VARCHAR(128) NOT NULL , 
    `tools` VARCHAR(128) NOT NULL , 
    `cssStyle` INT(3) NOT NULL , 
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;