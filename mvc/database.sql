CREATE table usuario(
 	id bigserial not null primary key,
	tipo boolean not null,
	nome varchar(100) not null,
	email VARCHAR(100) not null,
	senha varchar(50) not null,
	telefone int not null
);

create table roedor(
	id bigserial not null primary key,
	especie varchar(50) not null
);
create table categoria_produto(
	id bigserial not null primary key,
	nome varchar(50) not null
);

create table produto(
	id bigserial not null primary key,
	tipo int not null,
	descricao varchar(100) not null, //trasformar emUnique
	preco numeric(10,2) not null,
	roedor_id int references roedor(id),
	FOREIGN key (tipo)REFERENCES categoria_produto(id)
);

create table estoque(
	id bigserial not null primary key,
	produto_id int references produto(id),
	quantidade int not null
);

create table ordem_compra(
	id bigserial not null primary key,
	data_compra timestamp not null,
	usuario_id int references usuario(id),
	produto_id int references produto(id)
);

select * from estoque

select prod.descricao as nomeProduto, prod.preco as preco, categ.nome as nomeCateg
from  produto prod join categoria_produto categ
    on categ.id = prod.tipo
