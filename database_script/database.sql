
CREATE SCHEMA `YNESP` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ;

USE YNESP;

CREATE TABLE `YNESP`.`tb_usuario` 
( `id` INT(100) NOT NULL AUTO_INCREMENT , 
`nome` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL ,
 `username` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL ,
 `email` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL , 
 `senha` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL ,
 `data_criacao` DATETIME NOT NULL , PRIMARY KEY (`id`(100)),
 UNIQUE (`email`(200))) ENGINE = InnoDB;
 
 
 CREATE TABLE `ynesp`.`tb_artigo` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `titulo` VARCHAR(100) NULL COMMENT '',
  `autor_prin` VARCHAR(45) NULL COMMENT '',
  `autor_sec` VARCHAR(45) NULL COMMENT '',  
  `autor_terc` VARCHAR(45) NULL COMMENT '',
  `resumo` LONGTEXT NOT NULL COMMENT '',
  `imagem` LONGBLOB NOT NULL COMMENT '',
  `pdf` LONGBLOB NOT NULL COMMENT '', 
  `imagem_path` VARCHAR(105) NULL COMMENT '',  
  `pdf_path` VARCHAR(105) NULL COMMENT '',   
  `data_criacao` date NOT NULL,
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  UNIQUE INDEX `titulo_UNIQUE` (`titulo` ASC)  COMMENT '');
  
  alter table `ynesp`.`tb_artigo` add column `tags` varchar(100);
  
  
  
  create table `YNESP`.`tb_comment`(
`id` INT(100) NOT NULL AUTO_INCREMENT , 
 `nome` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL ,
 `email` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL ,   
 `website` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL , 
 `comentario` LONGTEXT NOT NULL COMMENT' ',
  `id_artigo` INT NOT NULL ,
   PRIMARY KEY (`id`)  COMMENT '' 
);