drop database if exists cencel;
create database cencel;
use cencel;

create table usuarios(
	id_usuario integer auto_increment,
	nombre varchar(255) not null,
	direccion text not null,
	poblacion varchar(100) not null,
	codigo_postal char(5),
	telefono1 varchar(15) not null,
	telefono2 varchar(15),
	email varchar(64),
	rfc char(13),
	login varchar(64) not null,
	pass varchar(64) not null,
	perfil varchar(20) not null,
	precio_asignado varchar(30) not null,
	almacen varchar(50) not null,
	tipo_cliente varchar(30) not null,
	primary key(id_usuario)
)ENGINE=InnoDb;

create table almacenes(
	id_almacen tinyint auto_increment,
	almacen varchar(50),
	primary key(id_almacen)
)ENGINE=InnoDb;

insert into almacenes(almacen) values('San Juan Del Rio');
insert into almacenes(almacen) values('Queretaro');
