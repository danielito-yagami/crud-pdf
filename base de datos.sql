--creando la base de datos


create DATABASE proyectofinal;

use proyectofinal;

create table genero(

idGenero int primary key,
genero varchar(10)

);

create table personas(

idPersona int primary key,
nombre varchar(50),
apellidoP varchar(50),
apellidoM varchar(50),
telefono varchar(12),
idGenero int,
foreign key (idGenero) references genero(idGenero)
);

--Insert en las tablas 

insert into genero(idGenero,genero)
values(1,'Hombre'),
(2,'Mujer');

insert into personas(idPersona, nombre,apellidoP,apellidoM,telefono,idGenero)
values(1,'Daniel','Romero','Cortes','',1),
(2,'Alejandro','Díaz ','Acosta','55677889',1),
(3,'Stephanie','Mondragon','Alvarez','455678787',2),
(4,'Sofía','Alcántar','Guajardo','',2),
(5,'Dulce','De León','Bolaños','',2),
(6,'Valeria','Betanzos','Caballero','',2),
(7,'Narel','Navarro','Bremermann ','',2),
(8,'Zoe','Delgado','Jadilson','',2),
(9,'Susana','Bustamante','Perez','',2),
(10,'Angel','Bernal','Aguirre','',1),
(11,'Jorge','Suarez','Herrera','',1);
