-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema aia
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema aia
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `aia` DEFAULT CHARACTER SET utf8 ;
USE `aia` ;

-- -----------------------------------------------------
-- Table `aia`.`module`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aia`.`module` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `iconfa` VARCHAR(100) NULL DEFAULT NULL,
  `label` VARCHAR(50) NOT NULL,
  `description` VARCHAR(500) NOT NULL,
  `controller` VARCHAR(50) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  `type_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_controller_type1_idx` (`type_id` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `aia`.`profile`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aia`.`profile` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(500) NOT NULL,
  `category` VARCHAR(45) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `aia`.`access`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aia`.`access` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `profile_id` INT(11) NOT NULL,
  `module_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_access_profile1_idx` (`profile_id` ASC),
  INDEX `fk_access_module1_idx` (`module_id` ASC),
  CONSTRAINT `fk_access_module1`
    FOREIGN KEY (`module_id`)
    REFERENCES `aia`.`module` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_access_profile1`
    FOREIGN KEY (`profile_id`)
    REFERENCES `aia`.`profile` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `aia`.`state`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aia`.`state` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `state` VARCHAR(45) NOT NULL,
  `category` VARCHAR(45) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `aia`.`type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aia`.`type` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(45) NOT NULL,
  `category` VARCHAR(45) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `aia`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aia`.`user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `names` VARCHAR(100) NOT NULL,
  `surnames` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  `lastupdate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type_id` INT(11) NOT NULL,
  `state_id` INT(11) NOT NULL,
  `sex` CHAR(1) NOT NULL,
  `profile_id` INT(11) NOT NULL,
  `authKey` VARCHAR(45) NULL DEFAULT NULL,
  `accessToken` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usuario_tipo1_idx` (`type_id` ASC),
  INDEX `fk_usuario_estado1_idx` (`state_id` ASC),
  INDEX `fk_user_profile1_idx` (`profile_id` ASC),
  CONSTRAINT `fk_user_profile1`
    FOREIGN KEY (`profile_id`)
    REFERENCES `aia`.`profile` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_estado1`
    FOREIGN KEY (`state_id`)
    REFERENCES `aia`.`state` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_tipo1`
    FOREIGN KEY (`type_id`)
    REFERENCES `aia`.`type` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `aia`.`property`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aia`.`property` (
  `id` INT NOT NULL,
  `transaction` INT NULL,
  `type_id` INT(11) NOT NULL,
  `state_id` INT(11) NOT NULL,
  `price` DOUBLE NULL,
  `money` CHAR(1) NOT NULL,
  `commission` DOUBLE NOT NULL,
  `area` DOUBLE NULL,
  `bedrooms` DOUBLE NULL,
  `bathrooms` DOUBLE NULL,
  `longitude` VARCHAR(50) NULL,
  `latitude` VARCHAR(50) NULL,
  `active` TINYINT(1) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_property_type1_idx` (`type_id` ASC),
  INDEX `fk_property_state1_idx` (`state_id` ASC),
  CONSTRAINT `fk_property_type1`
    FOREIGN KEY (`type_id`)
    REFERENCES `aia`.`type` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_property_state1`
    FOREIGN KEY (`state_id`)
    REFERENCES `aia`.`state` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aia`.`property_detail`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aia`.`property_detail` (
  `id` INT NOT NULL,
  `name` VARCHAR(60) NULL,
  `description` VARCHAR(100) NULL,
  `active` TINYINT(1) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aia`.`images_property`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aia`.`images_property` (
  `id` INT NOT NULL,
  `property_id` INT NOT NULL,
  `name` VARCHAR(150) NULL,
  `order` INT NULL,
  `active` TINYINT(1) NULL,
  PRIMARY KEY (`id`, `property_id`),
  INDEX `fk_images_property_property1_idx` (`property_id` ASC),
  CONSTRAINT `fk_images_property_property1`
    FOREIGN KEY (`property_id`)
    REFERENCES `aia`.`property` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aia`.`images_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aia`.`images_user` (
  `id` INT NOT NULL,
  `name` VARCHAR(150) NULL,
  `order` INT NULL,
  `active` TINYINT(1) NULL,
  `user_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `user_id`),
  INDEX `fk_images_user_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_images_user_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `aia`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aia`.`accesspropertydetail`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aia`.`accesspropertydetail` (
  `id` INT NOT NULL,
  `property_id` INT NOT NULL,
  `property_detail_id` INT NOT NULL,
  `active` TINYINT(1) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_accesspropertydetail_property1_idx` (`property_id` ASC),
  INDEX `fk_accesspropertydetail_property_detail1_idx` (`property_detail_id` ASC),
  CONSTRAINT `fk_accesspropertydetail_property1`
    FOREIGN KEY (`property_id`)
    REFERENCES `aia`.`property` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_accesspropertydetail_property_detail1`
    FOREIGN KEY (`property_detail_id`)
    REFERENCES `aia`.`property_detail` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
