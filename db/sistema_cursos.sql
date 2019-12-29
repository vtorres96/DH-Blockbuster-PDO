-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema sistema_cursos
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sistema_cursos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sistema_cursos` DEFAULT CHARACTER SET latin1 ;
USE `sistema_cursos` ;

-- -----------------------------------------------------
-- Table `sistema_cursos`.`atores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_cursos`.`atores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL DEFAULT NULL,
  `sobrenome` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sistema_cursos`.`filmes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_cursos`.`filmes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(40) NULL DEFAULT NULL,
  `sinopse` VARCHAR(150) NULL DEFAULT NULL,
  `data_lancamento` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sistema_cursos`.`atores_filmes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_cursos`.`atores_filmes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_ator` INT(11) NULL DEFAULT NULL,
  `id_filme` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_ator` (`id_ator` ASC) VISIBLE,
  INDEX `id_filme` (`id_filme` ASC) VISIBLE,
  CONSTRAINT `atores_filmes_ibfk_1`
    FOREIGN KEY (`id_ator`)
    REFERENCES `sistema_cursos`.`atores` (`id`),
  CONSTRAINT `atores_filmes_ibfk_2`
    FOREIGN KEY (`id_filme`)
    REFERENCES `sistema_cursos`.`filmes` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sistema_cursos`.`generos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_cursos`.`generos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(30) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sistema_cursos`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_cursos`.`usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL DEFAULT NULL,
  `email` VARCHAR(50) NULL DEFAULT NULL,
  `senha` VARCHAR(200) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
