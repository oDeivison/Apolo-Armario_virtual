create database bd_apolo;
-- drop database bd_apolo;
use bd_apolo;

create table usuario(
id_usuario INT AUTO_INCREMENT PRIMARY KEY,
nome varchar(100) not null,
senha varchar(100) not null,
email varchar(125));

create table OUTFIT(
id_outfit INT AUTO_INCREMENT PRIMARY KEY,
id_item varchar(10) not null,
id_usuario varchar(100) not null);

create table item(
id_item  INT AUTO_INCREMENT PRIMARY KEY,
nome varchar(100) not null,
id_categoria varchar(10) not null,
foto varchar(100) not null,
link varchar(500));

create table categoria(
id_categoria INT AUTO_INCREMENT PRIMARY KEY,
nome varchar(100));

INSERT INTO usuario
(nome, email , senha) VALUES
('Julio Cesar ', 'juliocesar@tananao', 'julio123');

insert into categoria (nome)
values("Calça"),
      ("Blusa");   

insert into item (nome, id_categoria, foto, link)
values ("Calça Cargo Preta", 1, "banco/img/CALÇA CARGO PRETA.png", "https://m.shein.com/br/goods-p-11650575.html"),
	   ("Camisa França", 2, "banco/img/CAMISA FRANÇA.png", "https://www.netshoes.com.br/p/camisa-nike-franca-i-202223-torcedor-pro-masculina-azul-2IC-9823-008"),
       ("Calça Cargo Bege", 1, "banco/img/CALÇA CARGO BEGE.png", "https://br.shein.com/Men-Pants-p-13383278-cat-1978.html"),
        ("Camisa Branca", 2, "banco/img/CAMISA BRANCA.png", "https://");
       
	
       

select * from item;
select * from categoria;