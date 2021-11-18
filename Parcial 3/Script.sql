create database L16100171;

use L16100171;

create table tabSuplementos
(
    NombrePro varchar(30),
    Categoria varchar(30),
    Marca varchar(30),
    Piezas int,
    Sabores varchar(20),
    Precio int,
    Descrip varchar(100),
    Distribidor varchar(20)
);

insert into tabSuplementos(NombrePro,Categoria,Marca,Piezas,Sabores,Precio,Descrip,Distribidor)
values('Diablo Power', 'Pre Entreno', 'Diablo Power','10','Fruit Punch', '499', 'Pre entreno de alto rendimiento', 'Tamauipas');

insert into tabSuplementos(NombrePro,Categoria,Marca,Piezas,Sabores,Precio,Descrip,Distribidor)
values('Psychotic', 'Pre Entreno', 'Insane Labz','10','Orange', '599', 'Pre entreno de alto rendimiento', 'Guerrero');

insert into tabSuplementos(NombrePro,Categoria,Marca,Piezas,Sabores,Precio,Descrip,Distribidor)
values('Madness', 'Pre Entreno', 'Mutant','10','Freedom', '699', 'Pre entreno de alto rendimiento', 'Sonora');

create table tabUsuarios
(
    idUsuario smallint not null auto_increment,
    nombre varchar(30),
    correo varchar(30),
    usuario varchar(20),
    contrasena varchar(30),
    primary key(idUsuario)
);

insert into tabUsuarios(nombre,correo,usuario,contrasena)
values('Jose','Usuario1@gmail.com','Usuario0','Contrasena');

insert into tabUsuarios(nombre,correo,usuario,contrasena)
values('Alondra','Usuario2@gmail.com','Usuario2','Contrasena2');

insert into tabUsuarios(nombre,correo,usuario,contrasena)
values('Efrain','Usuario3@gmail.com','Usuario3','Contrasena3');

insert into tabUsuarios(nombre,correo,usuario,contrasena)
values('Antonio','Usuario4@gmail.com','Usuario4','Contrasena4');

insert into tabUsuarios(nombre,correo,usuario,contrasena)
values('Luis','Usuario5@gmail.com','Usuario5','Contrasena5');