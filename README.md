# escrito
# tablas
create table usuario (
usuario varchar(20) primary key,
contrasenia varchar(255)
);
create table souvenirs ( 
id int auto_increment primary key, 
nombre varchar(20), 
descripcion varchar(100),
stock int,
precio int, 
fechaDeAlta timestamp
);
 
 # usuario para loguearse
 
 insert into usuario values("ivanbraida22","$2y$10$5CmfdDk1grOYekJftdar9eqUejtTizF8D09jqDRX7UldPxRDTlxka");