-- 16.11.2022
select *
from st_ticketn;

alter table st_ticketn add column cumplimiento varchar(50) after hora_not_sitio;
alter table st_ticketn add column idgrupo bigint(20) after cumplimiento;

update st_ticketn set st_ticketn.cumplimiento = 'EN_PLAZO' where st_ticketn.cumplimiento is null;