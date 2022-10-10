/* 09.10.2022 */
CREATE TABLE rutina_docs (
  id BIGINT(20) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(100),
  titulo VARCHAR(100),
  extension VARCHAR(10),
  idevento BIGINT(20),
  PRIMARY KEY (id)
);

ALTER TABLE rutina_docs ADD FOREIGN KEY (idevento) REFERENCES evento(idevento);