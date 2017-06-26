CREATE TABLE usuario (
   id_usuario INT NOT NULL AUTO_INCREMENT,
   nome_usuario VARCHAR(45) NOT NULL ,
   email_usuario VARCHAR(45) NOT NULL ,
   senha_usuario VARCHAR (45) NOT NULL ,
   PRIMARY KEY(id_usuario)
)

SELECT id_usuario, nome_usuario, email_usuario,senha_usuario, price FROM usuario ORDER BY nome_usuario;

SELECT * FROM usuario;

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`)
VALUES (1, '771', 'Cerveja Bernardino', '7.71'),
	   (2, '666', 'Cerveja Labareda', '6.66');