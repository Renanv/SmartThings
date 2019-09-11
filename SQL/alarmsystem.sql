-- MySQL Script generated by MySQL Workbench
-- Wed Sep 11 11:13:36 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema alarmsysteem
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema alarmsysteem
-- -----------------------------------------------------
CREATE DATABASE IF NOT EXISTS `alarmsysteem` DEFAULT CHARACTER SET utf8 ;
USE `alarmsysteem` ;

-- -----------------------------------------------------
-- Table `alarmsysteem`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `alarmsysteem`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `alarmsysteem`.`movementlog`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `alarmsysteem`.`movementlog` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `timestamp` VARCHAR(45) NOT NULL,
  `image` VARCHAR(125) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
