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

insert into usuario(flg_admin, nome, email, senha, telefone)
values(true, 'Administrator', 'admin@admin.com', 'YWRtaW4=', '679999-9999');
--  a senha é admin

insert into roedor (especie) values ('Coelho');
insert into roedor (especie) values ('Hamster');
insert into roedor (especie) values ('Rato');
insert into roedor (especie) values ('Twister');
insert into roedor (especie) values ('Chinchila');

INSERT INTO categoria(nome) VALUES ('Ração');
INSERT INTO categoria(nome) VALUES ('Gaiolas e Casinhas');
INSERT INTO categoria(nome) VALUES ('Feno');
INSERT INTO categoria(nome) VALUES ('Acessórios');
INSERT INTO categoria(nome) VALUES ('Serragem');
INSERT INTO categoria(nome) VALUES ('Brinquedos');

INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (1, 'Ração de coelho', 32, 1);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (1, 'Sementes', 12, 1);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (1, 'Ração de Hamester', 25, 2);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (1, 'Semente girassol', 10, 2);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (1, 'Ração para rato', 50, 3);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (1, 'Ração de twister', 30, 4);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (1, 'Ração de chinchila', 46, 5);

INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (2, 'Cerca para coelho', 32, 1);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (2, 'Gaiola para hamester', 60, 2);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (2, 'Gaiola para rato', 70, 3);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (2, 'Casinha twister', 50, 4);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (2, 'Caixa de transporte', 35, 5);

INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (3, 'Feno prensado',12 , 1);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (3, 'Alfafa',17 , 2);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (3, 'Feno paletizado',15 , 3);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (3, 'Alfafa fracionada',18 , 4);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (3, 'Alfafa em rama',24 , 5);

INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (4, 'Rede', 20, 1);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (4, 'Bebedouro',10 , 2);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (4, 'Comedouro',10 , 3);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (4, 'Tubos', 23, 4);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (4, 'Comedouro',20 , 5);
	
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (5, 'Folhagem', 5,1);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (5, 'Cama natural', 17,2);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (5, 'Serragem prensada', 15,3);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (5, 'Serragem granulada', 16,4);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (5, 'Serragem',12 ,5);

INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (6, 'Brinquedo escondidinho de alfafa', 40,1);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (6, 'Escalador', 20,2);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (6, 'Rodinha', 45,3);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (6, 'Bola dispenser', 39,4);
INSERT INTO produto(categoria_id, descricao, preco, roedor_id)
VALUES (6, 'Toca chinchilas',55 ,5);
