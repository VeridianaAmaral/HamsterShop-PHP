CREATE table usuario(
 	id bigserial not null primary key,
	flg_admin boolean not null,
	nome varchar(100) not null,
	email VARCHAR(100) unique not null,
	senha varchar(50) not null,
	telefone varchar(50) not null
);

create table roedor(
	id bigserial not null primary key,
	especie varchar(50) not null
);

create table categoria(
	id bigserial not null primary key,
	nome varchar(50) not null
);

create table produto(
	id bigserial not null primary key,
	categoria_id bigint not null,
	descricao varchar(100) not null,
	preco numeric(10,2) not null,
	roedor_id int references roedor(id),
	FOREIGN key (categoria_id) REFERENCES categoria(id)
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

insert into roedor (especie) values ('coelho');
insert into roedor (especie) values ('hamster');
insert into roedor (especie) values ('rato');

INSERT INTO categoria(nome) VALUES ('Ração');
INSERT INTO categoria(nome) VALUES ('Acessórios');
INSERT INTO categoria(nome) VALUES ('Serragem');

INSERT INTO produto(
categoria_id, descricao, preco, roedor_id)
VALUES (1, 'Ração de cueio', 32, 1);
	
INSERT INTO produto(
categoria_id, descricao, preco, roedor_id)
VALUES (2, 'Acessório de Hamerti', 15, 2);
	
INSERT INTO produto(
categoria_id, descricao, preco, roedor_id)
VALUES (3, 'Acessório de Hamerti', 5,3);