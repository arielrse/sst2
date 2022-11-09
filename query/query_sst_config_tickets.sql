SELECT * FROM ticket_solucion s
WHERE s.`idsolucion` LIKE '%TRS%';

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

select *
from ticket_equipofalla e
where e.idsistemafalla = 3;

INSERT INTO ticket_tipofallasolucion (`idtipofalla`, `idsolucion`, `idequipofalla`) VALUES('TRF-046','TRS-042','TRE-024');
INSERT INTO ticket_tipofallasolucion (`idtipofalla`, `idsolucion`, `idequipofalla`) VALUES('TRF-045','TRS-042','TRE-024');

/*INSERT INTO `ticket_equipofalla` (`idequipofalla`, `nombreequipofalla`, `idsistemafalla`) VALUES('TRE-029','CABLE DE FIBRA OPTICA','3');
INSERT INTO `ticket_tipofalla` (`idtipofalla`, `nombretipofalla`, `idsistemafalla`) VALUES('TRF-053','CORTE DE FIBRA OPTICA','3');
INSERT INTO `ticket_equipofallatipofalla` (`idequipofalla`, `idtipofalla`) VALUES('TRE-029','TRF-053');*/

-- TRS-033 FUSION DE FO
INSERT INTO ticket_tipofallasolucion (`idtipofalla`, `idsolucion`, `idequipofalla`) VALUES('TRF-053','TRS-033','TRE-029');
