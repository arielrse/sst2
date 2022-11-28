-- drop table material;
create table material (
    idmaterial bigint(20) auto_increment not null ,
    codigo varchar(20),
    nombre varchar(255),
    unidad varchar(100),
    precio decimal(10,2),
    idcategoria bigint(20),
    idtipo bigint(20),
    descripcion varchar(512),
    primary key (idmaterial)
);

-- drop table mat_categoria;
create table mat_categoria(
  idcategoria bigint(20)  auto_increment not null ,
  nombre varchar(255),
  primary key (idcategoria)
);

insert into `mat_categoria` (`idcategoria`, `nombre`) values('1','MATERIAL TRANSMISION');
insert into `mat_categoria` (`idcategoria`, `nombre`) values('2','MATERIAL ENERGIA');
insert into `mat_categoria` (`idcategoria`, `nombre`) values('3','MATERIAL MENOR');

-- drop table mat_tipo;
create table mat_tipo(
    idtipo bigint(20)  auto_increment not null ,
    nombre varchar(255),
    primary key (idtipo)
);

alter table material add foreign key (idcategoria) references mat_categoria (idcategoria);
alter table material add foreign key (idtipo) references mat_tipo (idtipo);

alter table rutina_correctivo add column insumos longtext after notas;
alter table rutina_correctivo add column repuestos longtext after insumos;

INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('1','ACEITE  GRUPO ELECTRÓGENO');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('2','ADICIONALES');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('3','BALIZA');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('4','BATERÍA DE ARRANQUE');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('5','CABLE DE FIBRA OPTICA ');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('6','CABLEADO, ALIMENTADORES');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('7','CANALIZADO');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('8','CLIMATIZACIÓN');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('9','CONSTRUCCION DE CAMARAS');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('10','ELEMENTOS DE PROTECCIÓN - PILASTRA');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('11','EXTENSIÓN DE ENERGÍA MEDIA TENSIÓN');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('12','GRUA');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('13','INSTALACION DE POSTACIÓN Y SUS ACCESORIOS');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('14','INSTALACION DE RED DE FIBRA OPTICA ');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('15','MANO DE OBRA POR SEÑALIZACION');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('16','MISELANEO');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('17','PARARRAYOS');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('18','POSTACIÓN Y SUS ACCESORIOS');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('19','RETIRO');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('20','SEÑALIZACION');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('21','SISTEMA DE ILUMINACIÓN');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('22','SISTEMA DE PUESTA A TIERRA');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('23','TENDIDO SUBTERRANEO');
INSERT INTO `mat_tipo` (`idtipo`, `nombre`) VALUES('24','TRANSMISIÓN');