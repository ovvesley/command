CREATE TABLE `command`.`Usuario` ( `idUsuario` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(500) NOT NULL , `email` VARCHAR(500) NOT NULL , `senha` VARCHAR(500) NOT NULL , PRIMARY KEY (`idUsuario`)) ENGINE = InnoDB;

CREATE TABLE `command`.`Postagem` ( `idPostagem` INT NOT NULL AUTO_INCREMENT , `titulo` INT NOT NULL , `mensagem` INT NOT NULL , PRIMARY KEY (`idPostagem`)) ENGINE = InnoDB;
