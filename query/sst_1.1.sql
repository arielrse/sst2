/* 28.09.2022 */
ALTER TABLE evento ADD COLUMN repro DATE AFTER fin;
ALTER TABLE evento ADD COLUMN motivo VARCHAR(255) AFTER repro;
ALTER TABLE evento ADD COLUMN rep TINYINT(1) AFTER fin;
ALTER TABLE rutina ADD COLUMN estado VARCHAR(50);

/* 29.09.2022 */
ALTER TABLE catastro ADD COLUMN estado VARCHAR(50);