CREATE TABLE `nullbank`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `data_nascimento` DATETIME NOT NULL,
  `tipo` VARCHAR(45) NULL,
  `cpf_cnpj` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `nullbank`.`cartao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `bandeira` VARCHAR(45) NOT NULL,
  `numero` INT NOT NULL,
  `validade` DATETIME NULL,
  `limite` DOUBLE NULL,
  `ativo` TINYINT NULL,
  `id_usuario` INT NULL,
  PRIMARY KEY (`id`));
