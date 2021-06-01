create database Arredondoma;
use Arredondoma;

create table tabUsuarios
(
    idUsuario smallint not null auto_increment,
    nombre varchar(30),
    apPaterno varchar(30),
    apMaterno varchar(30),
    usuario varchar(20),
    contrasena varchar(30),
    primary key(idUsuario)
);

insert into tabUsuarios(nombre,apPaterno,apMaterno,usuario,contrasena)
values('Antonio','Arredondo','Martinez','Usuario1','Contrasena1');

insert into tabUsuarios(nombre,apPaterno,apMaterno,usuario,contrasena)
values('Alondra','Suazo','Alvardo','Usuario2','Contrasena2');

insert into tabUsuarios(nombre,apPaterno,apMaterno,usuario,contrasena)
values('Efrain','Arredondo','Suazo','Usuario3','Contrasena3');

insert into tabUsuarios(nombre,apPaterno,apMaterno,usuario,contrasena)
values('Antonio','Arredondo','Suazo','Usuario4','Contrasena4');

insert into tabUsuarios(nombre,apPaterno,apMaterno,usuario,contrasena)
values('Luis','Arredondo','Martinez','Usuario5','Contrasena5');