-- 11.03.2023
select * from rutina_imagen;

alter table rutina_imagen add column posicion int(11) after cod_imagen;

update rutina_imagen r set r.posicion = null;
update rutina_imagen r set r.posicion = r.id;

-- -----------------------------------------------
alter table rutina_correctivo_img add column posicion int(11) after id;
-- -----------------------------------------------
SELECT @i := @i + 1 AS contador, r.idrutina
FROM `rutina_imagen` r
CROSS JOIN (SELECT @i := 0) r
WHERE r.idrutina = 860
ORDER BY r.id
;

select *
from rutina_imagen order by id asc;

select *
from rutina_imagen order by idrutina, id asc;