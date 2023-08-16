-- 
SELECT idsistemafalla, nombresistemafalla 
FROM ticket_sistemafalla;

SELECT idequipofalla, nombreequipofalla   
FROM ticket_equipofalla;

SELECT ticket_tipofalla.idtipofalla, ticket_tipofalla.nombretipofalla 
FROM ticket_tipofalla;

SELECT idsolucion, nombresolucion 
FROM ticket_solucion ORDER BY idsolucion, nombresolucion;
-- 
SELECT * FROM ticket_solucion s
WHERE s.`idsolucion` LIKE '%ES%';

SELECT * FROM ticket_tipofalla t
WHERE t.idtipofalla LIKE '%EF%';

-- EQUIPOFALLA
-- TRE-024 MODEM

-- TIPOFALLA
-- TRF-045 FALLA DE MODEM
-- TRF-046 INHIBIDO

-- SOLUCION
-- TRS-042 RESET LOGICO

SELECT *
FROM ticket_tipofallasolucion tfs
WHERE tfs.`idequipofalla` = 'TRE-024'
AND   tfs.`idtipofalla` = 'TRF-045'
;

SELECT *
FROM ticket_equipofalla e
WHERE e.idsistemafalla = 3;

INSERT INTO ticket_tipofallasolucion (`idtipofalla`, `idsolucion`, `idequipofalla`) VALUES('TRF-046','TRS-042','TRE-024');
INSERT INTO ticket_tipofallasolucion (`idtipofalla`, `idsolucion`, `idequipofalla`) VALUES('TRF-045','TRS-042','TRE-024');

/*INSERT INTO `ticket_equipofalla` (`idequipofalla`, `nombreequipofalla`, `idsistemafalla`) VALUES('TRE-029','CABLE DE FIBRA OPTICA','3');
INSERT INTO `ticket_tipofalla` (`idtipofalla`, `nombretipofalla`, `idsistemafalla`) VALUES('TRF-053','CORTE DE FIBRA OPTICA','3');
INSERT INTO `ticket_equipofallatipofalla` (`idequipofalla`, `idtipofalla`) VALUES('TRE-029','TRF-053');*/

-- TRS-033 FUSION DE FO
INSERT INTO ticket_tipofallasolucion (`idtipofalla`, `idsolucion`, `idequipofalla`) VALUES('TRF-053','TRS-033','TRE-029');

-- 07.12.2022
INSERT INTO `ticket_tipofalla` (`idtipofalla`, `nombretipofalla`, `idsistemafalla`) VALUES('EF-065','Exposición solar insuficiente','2');
INSERT INTO `ticket_solucion` (`idsolucion`, `nombresolucion`, `idsistemafalla`) VALUES('ES-050','Otros','2');
INSERT INTO `ticket_equipofallatipofalla` (`idequipofalla`, `idtipofalla`) VALUES('EE-007','EF-065');
INSERT INTO `ticket_tipofallasolucion` (`idtipofalla`, `idsolucion`, `idequipofalla`) VALUES('EF-065','ES-050','EE-007');

--
DELETE FROM `ticket_tipofallasolucion` WHERE idequipofalla in (
'EE-020','EE-021','EE-022','EE-023','EE-024','EE-025','EE-026','EE-027','EE-028','EE-029','EE-030','EE-031','EE-032','EE-033','EE-034','EE-035','EE-036','EE-037','EE-038');
DELETE FROM `ticket_tipofallasolucion` WHERE idequipofalla in (
'RBE-060','RBE-061','RBE-062','RBE-063','RBE-064','RBE-065','RBE-066','RBE-067','RBE-068','RBE-069','RBE-070','RBE-071','RBE-072','RBE-073','RBE-074','RBE-075','RBE-076','RBE-077','RBE-078','RBE-079','RBE-080','RBE-081','RBE-082','RBE-083','RBE-084','RBE-085','RBE-086','RBE-087','RBE-088','RBE-089','RBE-090','RBE-091','RBE-092','RBE-093','RBE-094','RBE-095','RBE-096','RBE-097','RBE-098','RBE-099','RBE-100');
DELETE FROM `ticket_tipofallasolucion` WHERE idequipofalla in (
'TRE-040','TRE-041','TRE-042','TRE-043','TRE-044','TRE-045','TRE-046','TRE-047','TRE-048','TRE-049','TRE-050','TRE-051','TRE-052','TRE-053','TRE-054','TRE-055','TRE-056','TRE-057','TRE-058','TRE-059','TRE-060','TRE-061','TRE-062','TRE-063');
DELETE FROM `ticket_tipofallasolucion` WHERE idequipofalla in (
'DTE-010','DTE-011','DTE-012','DTE-013','DTE-014','DTE-015','DTE-016','DTE-017');

DELETE FROM ticket_equipofallatipofalla WHERE idequipofalla in (
'EE-020','EE-021','EE-022','EE-023','EE-024','EE-025','EE-026','EE-027','EE-028','EE-029','EE-030','EE-031','EE-032','EE-033','EE-034','EE-035','EE-036','EE-037','EE-038',
'RBE-060','RBE-061','RBE-062','RBE-063','RBE-064','RBE-065','RBE-066','RBE-067','RBE-068','RBE-069','RBE-070','RBE-071','RBE-072','RBE-073','RBE-074','RBE-075','RBE-076','RBE-077','RBE-078','RBE-079','RBE-080','RBE-081','RBE-082','RBE-083','RBE-084','RBE-085','RBE-086','RBE-087','RBE-088','RBE-089','RBE-090','RBE-091','RBE-092','RBE-093','RBE-094','RBE-095','RBE-096','RBE-097','RBE-098','RBE-099','RBE-100',
'TRE-040','TRE-041','TRE-042','TRE-043','TRE-044','TRE-045','TRE-046','TRE-047','TRE-048','TRE-049','TRE-050','TRE-051','TRE-052','TRE-053','TRE-054','TRE-055','TRE-056','TRE-057','TRE-058','TRE-059','TRE-060','TRE-061','TRE-062','TRE-063',
'DTE-010','DTE-011','DTE-012','DTE-013','DTE-014','DTE-015','DTE-016','DTE-017'
);

DELETE FROM `ticket_solucion` WHERE activo = 1;
DELETE FROM `ticket_tipofalla` WHERE activo = 1;
DELETE FROM `ticket_equipofalla` WHERE activo = 1;
