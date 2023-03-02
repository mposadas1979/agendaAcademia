
CREATE SCHEMA 'bd_mapr' DEFAULT CHARACTER SET utf8mb4;
use db_mapr;

CREATE TABLE `bd_mapr`.`tb_acategorias` (
  `id_acategoria` INT NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `descripcion` TEXT NULL,
  `fechaInsert` DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (`id_acategoria`));



CREATE TABLE `bd_mapr`.`tb_acontactos` (
  `id_agenda` INT NOT NULL AUTO_INCREMENT,
  `id_acategoria` INT NOT NULL,
  `nombre` VARCHAR(245) NULL,
  `paterno` VARCHAR(245) NULL,
  `materno` VARCHAR(245) NULL,
  `telefono` VARCHAR(245) NULL,
  `email` VARCHAR(245) NULL,
  `fechaInsert` VARCHAR(45) NOT NULL DEFAULT 'now()',
  PRIMARY KEY (`id_agenda`));

ALTER TABLE `bd_mapr`.`tb_acontactos` 
ADD INDEX `fkContactoCategoria_idx` (`id_acategoria` ASC);
;
ALTER TABLE `bd_mapr`.`tb_acontactos` 
ADD CONSTRAINT `fkContactoCategoria`
  FOREIGN KEY (`id_acategoria`)
  REFERENCES `bd_mapr`.`tb_acategorias` (`id_acategoria`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
