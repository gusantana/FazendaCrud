
create table fazenda
(
	id int auto_increment
		primary key,
	nome varchar(300) not null,
	dataRegistro datetime not null,
	situacao varchar(8) not null
)
engine=InnoDB;




create table funcionario
(
	id int auto_increment
		primary key,
	idFazenda int not null,
	nome varchar(300) not null,
	mensagem1 varchar(300) null,
	mensagem2 varchar(300) null,
	foto varchar(300) not null,
	situacao varchar(8) not null,
	dataRegistro datetime not null,
	constraint funcionario_fazenda_id_fk
		foreign key (idFazenda) references fazenda (id)
)
engine=InnoDB;





create table arquivo
(
	id int auto_increment
		primary key,
	idFuncionario int not null,
	fileContent longblob not null,
	mimeType varchar(300) not null,
	fileName int not null,
	tipoArquivo int not null,
	dataRegistro datetime not null
)
engine=InnoDB;

create index arquivo_funcionario_id_fk
	on arquivo (idFuncionario);



