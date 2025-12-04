CREATE TABLE `snapkar`.`sk_state_master` (`id` INT NOT NULL AUTO_INCREMENT , `country_id` INT NOT NULL , `name` VARCHAR(255) NOT NULL , `code` VARCHAR(10) NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `snapkar`.`sk_city_master` (`id` INT NOT NULL AUTO_INCREMENT , `state_id` INT NOT NULL , `name` VARCHAR(255) NOT NULL , `code` VARCHAR(255) NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `snapkar`.`sk_sub_city_master` (`id` INT NOT NULL AUTO_INCREMENT , `city_id` INT NOT NULL , `name` VARCHAR(255) NOT NULL , `code` VARCHAR(255) NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `snapkar`.`sk_village_master` (`id` INT NOT NULL AUTO_INCREMENT , `sub_city` INT NOT NULL , `name` VARCHAR(255) NOT NULL , `code` VARCHAR(255) NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `sk_village_master` CHANGE `sub_city` `sub_city_id` INT(11) NOT NULL;