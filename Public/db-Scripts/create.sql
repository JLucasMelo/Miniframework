create table tb_produtos (
	id int not null primary key auto_increment,
	descricao varchar(200) not null,
	preco float(8,2) not null
);

create table tb_info (
	id int not null primary key auto_increment,
	titulo varchar(200) not null,
	descricao text not null
);