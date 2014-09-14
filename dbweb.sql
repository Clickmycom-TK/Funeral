SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `clickmyc_tk` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `clickmyc_tk` ;

-- -----------------------------------------------------
-- Table `clickmyc_tk`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clickmyc_tk`.`users` ;

CREATE  TABLE IF NOT EXISTS `clickmyc_tk`.`users` (
  `id_Users` VARCHAR(100) NOT NULL ,
  `User` VARCHAR(50) NOT NULL ,
  `Password` VARCHAR(50) NOT NULL ,
  `Fname` VARCHAR(50) NOT NULL ,
  `Lname` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`id_Users`) )
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `clickmyc_tk`.`dead_person`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clickmyc_tk`.`dead_person` ;

CREATE  TABLE IF NOT EXISTS `clickmyc_tk`.`dead_person` (
  `id_Dead_Person` VARCHAR(100) NOT NULL ,
  `First` VARCHAR(50) NULL ,
  `Fname` VARCHAR(50) NULL ,
  `Lame` VARCHAR(50) NULL ,
  `Old` VARCHAR(50) NULL ,
  `Birthday` VARCHAR(50) NULL ,
  `Address_Bridday` TEXT NULL ,
  `Deadday` VARCHAR(50) NULL ,
  `Vara` TEXT NULL ,
  `Tel` VARCHAR(50) NULL ,
  `Name_Father` VARCHAR(50) NULL ,
  `Name_Mather` VARCHAR(50) NULL ,
  `Pic_dead` VARCHAR(50) NULL DEFAULT 'default' ,
  `Users_id_Users` VARCHAR(100) NOT NULL DEFAULT 'default' ,
  PRIMARY KEY (`id_Dead_Person`) ,
  INDEX `fk_Dead_Person_Users1` (`Users_id_Users` ASC) ,
  CONSTRAINT `fk_Dead_Person_Users1`
    FOREIGN KEY (`Users_id_Users` )
    REFERENCES `clickmyc_tk`.`users` (`id_Users` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `clickmyc_tk`.`relatives`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clickmyc_tk`.`relatives` ;

CREATE  TABLE IF NOT EXISTS `clickmyc_tk`.`relatives` (
  `id_Relatives` INT NOT NULL AUTO_INCREMENT ,
  `Name_relaives` TEXT NULL ,
  `Dead_Person_id_Dead_Person` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id_Relatives`) ,
  INDEX `fk_Relatives_Dead_Person1` (`Dead_Person_id_Dead_Person` ASC) ,
  CONSTRAINT `fk_Relatives_Dead_Person1`
    FOREIGN KEY (`Dead_Person_id_Dead_Person` )
    REFERENCES `clickmyc_tk`.`dead_person` (`id_Dead_Person` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `clickmyc_tk`.`not_user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clickmyc_tk`.`not_user` ;

CREATE  TABLE IF NOT EXISTS `clickmyc_tk`.`not_user` (
  `id_Not_User` VARCHAR(50) NOT NULL ,
  `Ip_address` VARCHAR(50) NOT NULL ,
  `Fname` VARCHAR(50) NOT NULL ,
  `Lname` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`id_Not_User`) )
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `clickmyc_tk`.`mourn_over`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clickmyc_tk`.`mourn_over` ;

CREATE  TABLE IF NOT EXISTS `clickmyc_tk`.`mourn_over` (
  `id_Mourn_Over` INT NOT NULL AUTO_INCREMENT ,
  `Comment` TEXT NOT NULL ,
  `Time` VARCHAR(50) NOT NULL ,
  `Users_id_Users` VARCHAR(100) NULL DEFAULT NULL ,
  `Dead_Person_id_Dead_Person` VARCHAR(100) NOT NULL ,
  `not_user_id_Not_User` VARCHAR(50) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_Mourn_Over`) ,
  INDEX `fk_Mourn_Over_Users1` (`Users_id_Users` ASC) ,
  INDEX `fk_Mourn_Over_Dead_Person1` (`Dead_Person_id_Dead_Person` ASC) ,
  INDEX `fk_mourn_Over_not_user1` (`not_user_id_Not_User` ASC) ,
  CONSTRAINT `fk_Mourn_Over_Users1`
    FOREIGN KEY (`Users_id_Users` )
    REFERENCES `clickmyc_tk`.`users` (`id_Users` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Mourn_Over_Dead_Person1`
    FOREIGN KEY (`Dead_Person_id_Dead_Person` )
    REFERENCES `clickmyc_tk`.`dead_person` (`id_Dead_Person` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_mourn_Over_not_user1`
    FOREIGN KEY (`not_user_id_Not_User` )
    REFERENCES `clickmyc_tk`.`not_user` (`id_Not_User` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `clickmyc_tk`.`schedule`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clickmyc_tk`.`schedule` ;

CREATE  TABLE IF NOT EXISTS `clickmyc_tk`.`schedule` (
  `id_Schedule` INT NOT NULL AUTO_INCREMENT ,
  `Relate_name` VARCHAR(50) NULL ,
  `Num_date` VARCHAR(50) NULL ,
  `Date` VARCHAR(50) NULL ,
  `Mounth` VARCHAR(50) NULL ,
  `Year` VARCHAR(50) NULL ,
  `Time` VARCHAR(50) NULL ,
  `Dead_Person_id_Dead_Person` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id_Schedule`) ,
  INDEX `fk_Schedule_Dead_Person1` (`Dead_Person_id_Dead_Person` ASC) ,
  CONSTRAINT `fk_Schedule_Dead_Person1`
    FOREIGN KEY (`Dead_Person_id_Dead_Person` )
    REFERENCES `clickmyc_tk`.`dead_person` (`id_Dead_Person` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `clickmyc_tk`.`education`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clickmyc_tk`.`education` ;

CREATE  TABLE IF NOT EXISTS `clickmyc_tk`.`education` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `Education_name` TEXT NULL ,
  `dead_person_id_Dead_Person` VARCHAR(100) NOT NULL ,
  INDEX `fk_Education_dead_person1` (`dead_person_id_Dead_Person` ASC) ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_Education_dead_person1`
    FOREIGN KEY (`dead_person_id_Dead_Person` )
    REFERENCES `clickmyc_tk`.`dead_person` (`id_Dead_Person` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyISAM;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
