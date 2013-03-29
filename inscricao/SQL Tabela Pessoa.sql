DROP TABLE Pessoa

go

create table Pessoa
(
	id_pessoa  INT NOT NULL AUTO_INCREMENT,
	nome varchar(100) NOT NULL,
	sobrenome varchar(100) NOT NULL,
	email varchar(100) unique NOT NULL,
	senha varchar(40) NOT NULL,
	sexo varchar(9),
	dia_nasc int,
	mes_nasc int,
	ano_nasc int,
	rg varchar(10) NOT NULL,
	cpf varchar(11) NOT NULL,
	
	celular varchar(13) NOT NULL,
	telefone varchar(13),
	profissao varchar(20),
	estado_civil varchar(8),
	cidade varchar(30),
	estado varchar(2),
	adventista char CHECK(adventista='S' OR adventista='N'),
	igreja varchar(30),
	
	contato_emergencia varchar(100),
	telefone_contato varchar(13),
	doenca varchar(30),
	alergia varchar(100),
	cuidado varchar(255),

	precisa_carona char CHECK(precisa_carona='S' OR precisa_carona='N'),
	vagas_carro int,
	hora_saida varchar(20),

	quarto varchar(10),

	forma_pagamento varchar(20) NOT NULL,
	pag_efetuado varchar(3) NOT NULL,
	data_pagamento date,

	PRIMARY KEY(id_pessoa)
)
