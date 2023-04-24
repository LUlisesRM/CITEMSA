-- se elimina si es que no esta la DB
drop schema if exists bd_citemsa;
create schema if not exists bd_citemsa default character set utf8 collate utf8_spanish_ci;

use  bd_citemsa;

-- creamos la tabla


CREATE TABLE operadores(
id_operador int(10) not null,
credencial_mb int(4) not null,
nomina int(8) not null,
contraseña varchar (20) not null,
apellido_paterno text not null,
apellido_materno  text not null,
nombre text not null,
estatus  text not null,
fecha_alta date,
fecha_contrato date,
fecha_baja date,
tipo_licencia text not null,
id_licencia varchar (7) not null,
vencimiento_licencia date not null,
curp varchar (18) not null,
homoclave varchar (3) not null,
nss varchar (11) not null,
telefono varchar (10) not null,
correo text,
codigo_postal int (5) not null,
permisos varchar (3) not null default 001,
fecha_registro  datetime not null default current_timestamp
 ) engine=Innodb default charset=utf8;

CREATE TABLE padmon(
id_padmon int(10) not null,
credencial_mb int(4) not null,
nomina int(8) not null,
contraseña varchar (20) not null,
apellido_paterno text not null,
apellido_materno  text not null,
nombre text not null,
estatus  text not null,
fecha_alta date,
fecha_contrato date,
fecha_baja date,
tipo_licencia text not null,
id_licencia varchar (7) not null,
vencimiento_licencia date not null,
curp varchar (18) not null,
homoclave varchar (3) not null,
nss varchar (11) not null,
telefono varchar (10) not null,
correo text,
codigo_postal int (5) not null,
permisos varchar (3) not null default 003,
fecha_registro  datetime not null default current_timestamp
 ) engine=Innodb default charset=utf8;

alter table operadores
change column id_operador id_operador int(10) not null auto_increment,
add primary key (id_operador);

alter table padmon
change column id_padmon id_padmon int(10) not null auto_increment,
add primary key (id_padmon);

INSERT INTO operadores (credencial_mb,nomina,contraseña,apellido_paterno,apellido_materno,nombre,estatus,
fecha_contrato,tipo_licencia,id_licencia,vencimiento_licencia,curp,homoclave,nss,telefono,codigo_postal)
VALUES ('3182','57','AGUILAR','CABRERA','HECTOR', 'ACTIVO','2013-11-05', 'TIPO C','C520621','2024-11-19',
'AUCH670305HDFGBC06','GU5','30876718229','5521444349','15280');

/* UPDATE padmon set codigo_postal = '55540' where id_padmon = 2 */