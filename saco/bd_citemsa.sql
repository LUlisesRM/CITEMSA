-- se elimina si es que no esta la DB
drop schema if exists bd_citemsa;
create schema if not exists bd_citemsa default character set utf8 collate utf8_spanish_ci;

use  bd_citemsa;

-- creamos la tabla


CREATE TABLE operadores(
id_operador int(10) not null,
imagen longblob,
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

INSERT INTO padmon (credencial_mb,nomina,contraseña,apellido_paterno,apellido_materno,nombre,estatus,
fecha_contrato,id_licencia,vencimiento_licencia,curp,homoclave,nss,telefono,codigo_postal)
VALUES ('3309','88','123456','PEDRAZA','QUIROZ','MARIO ALBERTO', 'ACTIVO','2013-11-05','C525525','2025-01-13',
'PEQM710426HDFDRR05','PC0','05147102346','5550080107','07420');

INSERT INTO padmon (credencial_mb,nomina,contraseña,apellido_paterno,apellido_materno,nombre,estatus,
fecha_contrato,id_licencia,vencimiento_licencia,curp,homoclave,nss,telefono,codigo_postal)
VALUES ('0001','00','123456','REYES','MILAN','LUIS ULISES', 'ACTIVO','2022-01-18','C000000','2024-01-01',
'REML961130HDFYLS01','2LA','10000000000','5575357042','07420');


INSERT INTO operadores (credencial_mb,nomina,contraseña,apellido_paterno,apellido_materno,nombre,estatus,
fecha_contrato,id_licencia,vencimiento_licencia,curp,homoclave,nss,telefono,codigo_postal)
VALUES ('3182','57','123456','AGUILAR','CABRERA','HECTOR', 'ACTIVO','2013-11-05','C520621','2024-11-19',
'AUCH670305HDFGBC06','GU5','30876718229','5521444349','15280');

INSERT INTO operadores (credencial_mb,nomina,contraseña,apellido_paterno,apellido_materno,nombre,estatus,
fecha_contrato,id_licencia,vencimiento_licencia,curp,homoclave,nss,telefono,codigo_postal)
VALUES ('6714','312','123456','AGUIRRE','BURGOS','NORBERTO MELCHOR', 'ACTIVO','2020-09-10','N481314','2024-05-21',
'AUBN840606HDFGRR05','CH2','45028443831','5569680834','07440');

INSERT INTO operadores (credencial_mb,nomina,contraseña,apellido_paterno,apellido_materno,nombre,estatus,
fecha_contrato,id_licencia,vencimiento_licencia,curp,homoclave,nss,telefono,codigo_postal)
VALUES ('3175','5','123456','ALVARADO','VELAZQUEZ','SALVADOR', 'ACTIVO','2013-11-05','C490314','2024-07-14',
'AAVS690113HDFLLL05','LG8','75866910054','5527521624','07410');

INSERT INTO operadores (credencial_mb,nomina,contraseña,apellido_paterno,apellido_materno,nombre,estatus,
fecha_contrato,id_licencia,vencimiento_licencia,curp,homoclave,nss,telefono,codigo_postal)
VALUES ('3182','57','123456','AGUILAR','CABRERA','HECTOR', 'ACTIVO','2013-11-05','C520621','2024-11-19',
'AUCH670305HDFGBC06','GU5','30876718229','5521444349','15280');

INSERT INTO operadores (credencial_mb,nomina,contraseña,apellido_paterno,apellido_materno,nombre,estatus,
fecha_contrato,id_licencia,vencimiento_licencia,curp,homoclave,nss,telefono,codigo_postal)
VALUES ('7733','409','123456','CASTILLON','FRANCO','EDUARDO', 'ACTIVO','2022-06-04','R546834','2023-09-08',
'CAFE820730HDFSRD06','JE3','45998212752','5514906005','09700');

/* UPDATE padmon set codigo_postal = '55540' where id_padmon = 2 */