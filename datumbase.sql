-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema datumbase
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema datumbase
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `datumbase` DEFAULT CHARACTER SET utf8 ;
USE `datumbase` ;

-- -----------------------------------------------------
-- Table `datumbase`.`tipos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `datumbase`.`tipos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `datumbase`.`subtipos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `datumbase`.`subtipos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `tipos_id` INT NOT NULL,
  `gama_alta` FLOAT NOT NULL,
  `gama_media` FLOAT NOT NULL,
  `gama_baja` FLOAT NOT NULL,
  `tipo_unidad` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_subtipos_tipos_idx` (`tipos_id` ASC),
  CONSTRAINT `fk_subtipos_tipos`
    FOREIGN KEY (`tipos_id`)
    REFERENCES `datumbase`.`tipos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `datumbase`.`centros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `datumbase`.`centros` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `datumbase`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `datumbase`.`roles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `rol` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `datumbase`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `datumbase`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre_usuario` VARCHAR(45) NULL,
  `correo` VARCHAR(45) NULL,
  `password` VARCHAR(100) NULL,
  `roles_id` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usuarios_roles1_idx` (`roles_id` ASC),
  CONSTRAINT `fk_usuarios_roles1`
    FOREIGN KEY (`roles_id`)
    REFERENCES `datumbase`.`roles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `datumbase`.`tipos_donantes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `datumbase`.`tipos_donantes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `datumbase`.`sexos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `datumbase`.`sexos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `sexo` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `datumbase`.`donantes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `datumbase`.`donantes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipos_donantes_id` INT NOT NULL,
  `es_habitual` TINYINT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `cif` VARCHAR(9) NULL,
  `donantescol` VARCHAR(45) NULL,
  `sexos_id` INT NULL,
  `tiene_aninales` TINYINT NULL,
  `donantescol1` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `correo` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  `vinculo_entidad` VARCHAR(45) NULL,
  `spam` TINYINT NULL,
  `poblacion` VARCHAR(45) NULL,
  `pais` VARCHAR(45) NULL,
  `es_colaborador` TINYINT NULL,
  `tipo_colaboracion` VARCHAR(45) NULL,
  `fecha_alta` DATETIME NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_donantes_tipos_donantes1_idx` (`tipos_donantes_id` ASC),
  INDEX `fk_donantes_sexos1_idx` (`sexos_id` ASC),
  CONSTRAINT `fk_donantes_tipos_donantes1`
    FOREIGN KEY (`tipos_donantes_id`)
    REFERENCES `datumbase`.`tipos_donantes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_donantes_sexos1`
    FOREIGN KEY (`sexos_id`)
    REFERENCES `datumbase`.`sexos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `datumbase`.`donativos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `datumbase`.`donativos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `donatiuscol` VARCHAR(45) NULL,
  `subtipos_id` INT NOT NULL,
  `desc_animal` VARCHAR(45) NULL,
  `centros_receptor_id` INT NOT NULL,
  `centro_receptor_altres` VARCHAR(45) NULL,
  `usuarios_id` INT NOT NULL,
  `usuario_receptor` VARCHAR(45) NULL,
  `centros_desti_id` INT NOT NULL,
  `donantes_id` INT NOT NULL,
  `coste` FLOAT NULL,
  `unidades` INT NULL,
  `peso` FLOAT NULL,
  `fecha_donativo` DATETIME NULL,
  `hay_factura` TINYINT NULL,
  `ruta_factura` VARCHAR(255) NULL,
  `donativoscol` VARCHAR(45) NULL,
  `es_coordinada` TINYINT NULL,
  PRIMARY KEY (`id`, `centros_desti_id`),
  INDEX `fk_donatius_subtipos1_idx` (`subtipos_id` ASC),
  INDEX `fk_donativos_centros1_idx` (`centros_receptor_id` ASC),
  INDEX `fk_donativos_usuarios1_idx` (`usuarios_id` ASC),
  INDEX `fk_donativos_centros2_idx` (`centros_desti_id` ASC),
  INDEX `fk_donativos_donantes1_idx` (`donantes_id` ASC),
  CONSTRAINT `fk_donatius_subtipos1`
    FOREIGN KEY (`subtipos_id`)
    REFERENCES `datumbase`.`subtipos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_donativos_centros1`
    FOREIGN KEY (`centros_receptor_id`)
    REFERENCES `datumbase`.`centros` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_donativos_usuarios1`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `datumbase`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_donativos_centros2`
    FOREIGN KEY (`centros_desti_id`)
    REFERENCES `datumbase`.`centros` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_donativos_donantes1`
    FOREIGN KEY (`donantes_id`)
    REFERENCES `datumbase`.`donantes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `datumbase`.`animales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `datumbase`.`animales` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `datumbase`.`animales_donativos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `datumbase`.`animales_donativos` (
  `animales_id` INT NOT NULL,
  `donativos_id` INT NOT NULL,
  PRIMARY KEY (`animales_id`, `donativos_id`),
  INDEX `fk_animales_has_donativos_donativos1_idx` (`donativos_id` ASC),
  INDEX `fk_animales_has_donativos_animales1_idx` (`animales_id` ASC),
  CONSTRAINT `fk_animales_has_donativos_animales1`
    FOREIGN KEY (`animales_id`)
    REFERENCES `datumbase`.`animales` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_animales_has_donativos_donativos1`
    FOREIGN KEY (`donativos_id`)
    REFERENCES `datumbase`.`donativos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `datumbase`.`donantes_animales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `datumbase`.`donantes_animales` (
  `donantes_id` INT NOT NULL,
  `animales_id` INT NOT NULL,
  PRIMARY KEY (`donantes_id`, `animales_id`),
  INDEX `fk_donantes_has_animales_animales1_idx` (`animales_id` ASC),
  INDEX `fk_donantes_has_animales_donantes1_idx` (`donantes_id` ASC),
  CONSTRAINT `fk_donantes_has_animales_donantes1`
    FOREIGN KEY (`donantes_id`)
    REFERENCES `datumbase`.`donantes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_donantes_has_animales_animales1`
    FOREIGN KEY (`animales_id`)
    REFERENCES `datumbase`.`animales` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
