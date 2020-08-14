create database ingresorelacional;

use ingresorelacional;

create table tipo_documento(
id varchar(15) not null primary key,
nombre_td varchar(55) not null
);


create table usuario(
td varchar(15) not null,
numero int(30) not null
nombre varchar(55) not null,
foto varchar(200)
);

alter table usuario
add foreign key(td) references tipo_documento(id);

alter table usuario
add primary key(td,numero);


