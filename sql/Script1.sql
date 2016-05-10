-- MySQL Script generated by MySQL Workbench
-- 05/07/16 16:52:32
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema equipoECCI
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema equipoECCI
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `equipoECCI` DEFAULT CHARACTER SET utf8 ;
USE `equipoECCI` ;

-- -----------------------------------------------------
-- Table `equipoECCI`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `equipoECCI`.`users` ;

CREATE TABLE IF NOT EXISTS `equipoECCI`.`users` (
  `correo` VARCHAR(50) NOT NULL,
  `password` VARCHAR(15) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `cedula` INT NULL,
  `foto_id` LONGBLOB NULL,
  `tipo_usuario` TINYINT(3) NULL,
  PRIMARY KEY (`correo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `equipoECCI`.`tickets`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `equipoECCI`.`tickets` ;

CREATE TABLE IF NOT EXISTS `equipoECCI`.`tickets` (
  `id` INT NOT NULL,
  `modelo` VARCHAR(20) NULL,
  `serie` VARCHAR(30) NULL,
  `marca` VARCHAR(15) NULL,
  `codigo_QR` LONGBLOB NULL,
  `placa_universitaria` VARCHAR(30) NULL,
  `tipo_activo` VARCHAR(15) NULL,
  `observaciones` VARCHAR(80) NULL,
  `fecha_solicitud` DATE NULL,
  `fecha_expiracion` DATE NULL DEFAULT '1000-01-01',
  `estado` VARCHAR(20) NULL,
  `users_correo_solicita` VARCHAR(50) NOT NULL,
  `users_correo_aprueba` VARCHAR(50) NULL,
  PRIMARY KEY (`id`, `users_correo_solicita`),
  INDEX `fk_tickets_users_idx` (`users_correo_solicita` ASC),
  INDEX `fk_tickets_users1_idx` (`users_correo_aprueba` ASC),
  CONSTRAINT `fk_tickets_users`
    FOREIGN KEY (`users_correo_solicita`)
    REFERENCES `equipoECCI`.`users` (`correo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tickets_users1`
    FOREIGN KEY (`users_correo_aprueba`)
    REFERENCES `equipoECCI`.`users` (`correo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
USE `equipoECCI`;

DELIMITER $$

USE `equipoECCI`$$
DROP TRIGGER IF EXISTS `equipoECCI`.`tickets_AFTER_INSERT` $$
USE `equipoECCI`$$
CREATE DEFINER = CURRENT_USER TRIGGER `equipoECCI`.`tickets_AFTER_INSERT` AFTER INSERT ON `tickets` FOR EACH ROW
BEGIN
 DECLARE annio INT;
  SET @annio := (SELECT EXTRACT(YEAR FROM fecha_solicitud));
INSERT INTO tickets (fecha_expiracion)
  VALUES (CONCAT(@annio, RIGHT(fecha_expiracion,6)));
END$$


DELIMITER ;
