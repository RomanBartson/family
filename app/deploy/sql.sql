CREATE TABLE `family`.`Articles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `article_title` VARCHAR(45) NULL,
  `article` TEXT NULL,
  `visit` INT NULL,
  `added` DATETIME NULL,
  `changed` DATETIME NULL,
  PRIMARY KEY (`id`));


CREATE TABLE `family`.`Article2Tag` (
  `id` INT(3) NOT NULL,
  `article_id` TINYINT NULL,
  `tag_id` INT(1) NULL,
  `tag_title` VARCHAR(255) NULL,
  PRIMARY KEY (`id`));
