-- 29.07.2023
ALTER TABLE ticket_equipofalla ENGINE = INNODB;
ALTER TABLE ticket_equipofalla ADD FOREIGN KEY (idsistemafalla) REFERENCES ticket_sistemafalla(idsistemafalla);

ALTER TABLE ticket_tipofalla ENGINE = INNODB;
ALTER TABLE ticket_tipofalla ADD FOREIGN KEY (idsistemafalla) REFERENCES ticket_sistemafalla(idsistemafalla);

ALTER TABLE ticket_equipofallatipofalla ENGINE = INNODB;
ALTER TABLE ticket_equipofallatipofalla ADD FOREIGN KEY (idequipofalla) REFERENCES ticket_equipofalla(idequipofalla);
ALTER TABLE ticket_equipofallatipofalla ADD FOREIGN KEY (idtipofalla) REFERENCES ticket_tipofalla(idtipofalla);

ALTER TABLE ticket_solucion ENGINE = INNODB;
ALTER TABLE ticket_solucion ADD FOREIGN KEY (idsistemafalla) REFERENCES ticket_sistemafalla(idsistemafalla);

ALTER TABLE ticket_tipofallasolucion ENGINE = INNODB;
ALTER TABLE ticket_tipofallasolucion ADD FOREIGN KEY (idtipofalla) REFERENCES ticket_tipofalla(idtipofalla);
ALTER TABLE ticket_tipofallasolucion ADD FOREIGN KEY (idsolucion) REFERENCES ticket_solucion(idsolucion);
ALTER TABLE ticket_tipofallasolucion ADD FOREIGN KEY (idequipofalla) REFERENCES ticket_equipofalla(idequipofalla);

--
ALTER TABLE ticket_equipofalla ADD COLUMN activo char(1);
ALTER TABLE ticket_tipofalla ADD COLUMN activo char(1);
ALTER TABLE ticket_solucion ADD COLUMN activo char(1);

UPDATE ticket_equipofalla SET activo = 0;
UPDATE ticket_tipofalla SET activo = 0;
UPDATE ticket_solucion SET activo = 0;