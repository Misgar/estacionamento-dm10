CREATE DATABASE estacionamento;

USE estacionamento;

CREATE TABLE proprietarios (
	idPessoa INT,
	cpf VARCHAR(15) PRIMARY KEY NOT NULL,
	nome varchar(255) NOT NULL,
	idade INT NOT NULL,
	email VARCHAR(50),
	celular VARCHAR(30) NOT NULL
);
	
CREATE TABLE carrosEstacionados (
	idCarro INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	cpfProprietario VARCHAR(15) NOT NULL,
	marcaCarro VARCHAR(100),
	placaCarro VARCHAR(7),
	CONSTRAINT FOREIGN KEY (cpfProprietario) REFERENCES proprietarios(cpf)
);

ALTER TABLE proprietarios ADD INDEX(idPessoa);
ALTER TABLE proprietarios CHANGE idPessoa idPessoa INT NOT NULL AUTO_INCREMENT;
ALTER TABLE proprietarios MODIFY COLUMN  ativo VARCHAR(1) NOT NULL DEFAULT 1;


####




// Simulando UPDATE
SELECT * FROM proprietarios ;
SELECT * FROM carrosestacionados;

INSERT INTO proprietarios (cpf, nome, idade, email, celular) VALUES ('35195367812', 'Renato Tupdate', '25', 'teste@gmail.com', '40028922');

UPDATE carrosestacionados, proprietarios SET cpfProprietario = '35195367812', ativo = '0' WHERE cpfProprietario = '35195367813' AND cpf = '35195367813';

INSERT INTO carrosestacionados (cpfProprietario, marcaCarro, placaCarro) VALUES ('35195367812', 'OCTANE', '123321');

