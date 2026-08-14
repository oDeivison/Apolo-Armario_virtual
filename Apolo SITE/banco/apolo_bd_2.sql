create database bd_apolo;
-- drop database bd_apolo;
use bd_apolo;

create table usuario(
id_usuario INT AUTO_INCREMENT PRIMARY KEY,
nome varchar(100) not null,
senha varchar(100) not null,
email varchar(125));

create table outfit(
id_outfit  INT AUTO_INCREMENT PRIMARY KEY,
id_usuario  varchar(100) not null,
nomeOutfit varchar(100) not null,
camisa varchar(300) not null,
calca varchar(300) not null,
tenis varchar(300) not null);

INSERT INTO usuario
(nome, email , senha) VALUES
('Julio Cesar ', 'juliocesar@tananao', 'julio123');
	