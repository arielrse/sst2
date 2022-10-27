/** 26.10.2022 **/
ALTER TABLE formulario add column titulo0 varchar(255) AFTER tipo;
ALTER TABLE formulario add column titulo1 varchar(255);
ALTER TABLE formulario add column titulo2 varchar(255);
ALTER TABLE formulario add column titulo3 varchar(255);

update formulario set titulo0 = 'RUTINA DE MANTENIMIENTO PREVENTIVO - BANCO DE BATERÍAS' where codigo = '001' and tipo = 'PREVENTIVO';
update formulario set titulo1 = 'RMP-BB-001/2022' where codigo = '001' and tipo = 'PREVENTIVO';
update formulario set titulo2 = 'Subgerencia de Operación y Mantenimiento' where codigo = '001' and tipo = 'PREVENTIVO';
update formulario set titulo3 = 'Sistemas de Energía y Climatización' where codigo = '001' and tipo = 'PREVENTIVO';

update formulario set titulo0 = 'RUTINA DE MANTENIMIENTO PREVENTIVO - PLANTAS RECTIFICADORAS' where codigo = '002' and tipo = 'PREVENTIVO';
update formulario set titulo1 = 'RMP-REC-001/2022' where codigo = '002' and tipo = 'PREVENTIVO';
update formulario set titulo2 = 'Subgerencia de Operación y Mantenimiento' where codigo = '002' and tipo = 'PREVENTIVO';
update formulario set titulo3 = 'Sistemas de Energía y Climatización' where codigo = '002' and tipo = 'PREVENTIVO';

update formulario set titulo0 = 'RUTINA DE MANTENIMIENTO PREVENTIVO - AIRES ACONDICIONADOS PRECISION' where codigo = '003' and tipo = 'PREVENTIVO';
update formulario set titulo1 = 'RMP-AAP-001/2022' where codigo = '003' and tipo = 'PREVENTIVO';
update formulario set titulo2 = 'Subgerencia de Operación y Mantenimiento' where codigo = '003' and tipo = 'PREVENTIVO';
update formulario set titulo3 = 'Sistemas de Energía y Climatización' where codigo = '003' and tipo = 'PREVENTIVO';

update formulario set titulo0 = 'RUTINA DE MANTENIMIENTO PREVENTIVO - AIRES ACONDICIONADOS GABINETES' where codigo = '004' and tipo = 'PREVENTIVO';
update formulario set titulo1 = 'RMP-AAG-001/2022' where codigo = '004' and tipo = 'PREVENTIVO';
update formulario set titulo2 = 'Subgerencia de Operación y Mantenimiento' where codigo = '004' and tipo = 'PREVENTIVO';
update formulario set titulo3 = 'Sistemas de Energía y Climatización' where codigo = '004' and tipo = 'PREVENTIVO';

update formulario set titulo0 = 'RUTINA DE MANTENIMIENTO PREVENTIVO - EXTRACTORES DE AIRE' where codigo = '005' and tipo = 'PREVENTIVO';
update formulario set titulo1 = 'RMP-EA-001/2022' where codigo = '005' and tipo = 'PREVENTIVO';
update formulario set titulo2 = 'Subgerencia de Operación y Mantenimiento' where codigo = '005' and tipo = 'PREVENTIVO';
update formulario set titulo3 = 'Sistemas de Energía y Climatización' where codigo = '005' and tipo = 'PREVENTIVO';

update formulario set titulo0 = 'RUTINA DE MANTENIMIENTO PREVENTIVO - SFV / HIBRIDO' where codigo = '006' and tipo = 'PREVENTIVO';
update formulario set titulo1 = 'RMP-FVH-001/2022' where codigo = '006' and tipo = 'PREVENTIVO';
update formulario set titulo2 = 'Subgerencia de Operación y Mantenimiento' where codigo = '006' and tipo = 'PREVENTIVO';
update formulario set titulo3 = 'Sistemas de Energía y Climatización' where codigo = '006' and tipo = 'PREVENTIVO';

update formulario set titulo0 = 'RUTINA DE MANTENIMIENTO PREVENTIVO - EXTENSIÓN DE ENERGÍA MEDIA TENSIÓN' where codigo = '007' and tipo = 'PREVENTIVO';
update formulario set titulo1 = 'RMP-EMT-001/2022' where codigo = '007' and tipo = 'PREVENTIVO';
update formulario set titulo2 = 'Subgerencia de Operación y Mantenimiento' where codigo = '007' and tipo = 'PREVENTIVO';
update formulario set titulo3 = 'Sistemas de Energía y Climatización' where codigo = '007' and tipo = 'PREVENTIVO';

update formulario set titulo0 = 'RUTINA DE MANTENIMIENTO PREVENTIVO - BAJA TENSIÓN PILASTRA' where codigo = '008' and tipo = 'PREVENTIVO';
update formulario set titulo1 = 'RMP-BTP-001/2022' where codigo = '008' and tipo = 'PREVENTIVO';
update formulario set titulo2 = 'Subgerencia de Operación y Mantenimiento' where codigo = '008' and tipo = 'PREVENTIVO';
update formulario set titulo3 = 'Sistemas de Energía y Climatización' where codigo = '008' and tipo = 'PREVENTIVO';

update formulario set titulo0 = 'RUTINA DE MANTENIMIENTO PREVENTIVO - SISTEMA AUTOMÁTICO DE TRANSFERENCIA' where codigo = '009' and tipo = 'PREVENTIVO';
update formulario set titulo1 = 'RMP-ATS-001/2022' where codigo = '009' and tipo = 'PREVENTIVO';
update formulario set titulo2 = 'Subgerencia de Operación y Mantenimiento' where codigo = '009' and tipo = 'PREVENTIVO';
update formulario set titulo3 = 'Sistemas de Energía y Climatización' where codigo = '009' and tipo = 'PREVENTIVO';

update formulario set titulo0 = 'RUTINA DE MANTENIMIENTO PREVENTIVO - SISTEMA DE ALIMENTACION ININTERRUMPIDA' where codigo = '010' and tipo = 'PREVENTIVO';
update formulario set titulo1 = 'RMP-UPS-001/2022' where codigo = '010' and tipo = 'PREVENTIVO';
update formulario set titulo2 = 'Subgerencia de Operación y Mantenimiento' where codigo = '010' and tipo = 'PREVENTIVO';
update formulario set titulo3 = 'Sistemas de Energía y Climatización' where codigo = '010' and tipo = 'PREVENTIVO';

update formulario set titulo0 = 'RUTINA DE MANTENIMIENTO PREVENTIVO - GRUPO ELECTRÓGENO' where codigo = '011' and tipo = 'PREVENTIVO';
update formulario set titulo1 = 'RMP-GE-001/2022' where codigo = '011' and tipo = 'PREVENTIVO';
update formulario set titulo2 = 'Subgernecia de Operación y Mantenimiento' where codigo = '011' and tipo = 'PREVENTIVO';
update formulario set titulo3 = 'Sistemas de Energía y Climatización' where codigo = '011' and tipo = 'PREVENTIVO';

update formulario set titulo0 = 'RUTINA DE MANTENIMIENTO PREVENTIVO - SISTEMAS DE PROTECCION' where codigo = '012' and tipo = 'PREVENTIVO';
update formulario set titulo1 = 'RMP-PROTECCION-001/2022' where codigo = '012' and tipo = 'PREVENTIVO';
update formulario set titulo2 = 'Subgernecia de Operación y Mantenimiento' where codigo = '012' and tipo = 'PREVENTIVO';
update formulario set titulo3 = 'Sistemas de Energía y Climatización' where codigo = '012' and tipo = 'PREVENTIVO';

update formulario set titulo0 = 'RUTINA DE MANTENIMIENTO PREVENTIVO - INFRAESTRUCTURA DEL SITIO' where codigo = '013' and tipo = 'PREVENTIVO';
update formulario set titulo1 = 'RMP-IS-001/2022' where codigo = '013' and tipo = 'PREVENTIVO';
update formulario set titulo2 = 'Subgerencia de Operación y Mantenimiento' where codigo = '013' and tipo = 'PREVENTIVO';
update formulario set titulo3 = '' where codigo = '013' and tipo = 'PREVENTIVO';

update formulario set titulo0 = 'RUTINA DE MANTENIMIENTO PREVENTIVO - RADIO BASES' where codigo = '014' and tipo = 'PREVENTIVO';
update formulario set titulo1 = 'RMP-RBS-001/2022' where codigo = '014' and tipo = 'PREVENTIVO';
update formulario set titulo2 = 'Subgerencia de Operación y Mantenimiento' where codigo = '014' and tipo = 'PREVENTIVO';
update formulario set titulo3 = '' where codigo = '014' and tipo = 'PREVENTIVO';

update formulario set titulo0 = 'RUTINA DE MANTENIMIENTO PREVENTIVO - SISTEMA DE TRANSMISIÓN (MW, FO, SAT)' where codigo = '015' and tipo = 'PREVENTIVO';
update formulario set titulo1 = 'RMP-TX-001/2022' where codigo = '015' and tipo = 'PREVENTIVO';
update formulario set titulo2 = 'Subgerencia de Operación y Mantenimiento' where codigo = '015' and tipo = 'PREVENTIVO';
update formulario set titulo3 = '' where codigo = '015' and tipo = 'PREVENTIVO';

update formulario set titulo0 = 'RUTINA DE MANTENIMIENTO PREVENTIVO - ASR / OLT / METRO' where codigo = '016' and tipo = 'PREVENTIVO';
update formulario set titulo1 = 'RMP-DX-001/2022' where codigo = '016' and tipo = 'PREVENTIVO';
update formulario set titulo2 = 'Subgerencia de Operación y Mantenimiento' where codigo = '016' and tipo = 'PREVENTIVO';
update formulario set titulo3 = '' where codigo = '016' and tipo = 'PREVENTIVO';

update formulario set titulo0 = 'RUTINA DE MANTENIMIENTO PREVENTIVO - DESMALEZADO Y APLICACIÓN DE HERBICIDA' where codigo = '017' and tipo = 'PREVENTIVO';
update formulario set titulo1 = 'RMP-DYAH-006/2022' where codigo = '017' and tipo = 'PREVENTIVO';
update formulario set titulo2 = 'Subgerencia de Operación y Mantenimiento' where codigo = '017' and tipo = 'PREVENTIVO';
update formulario set titulo3 = '' where codigo = '017' and tipo = 'PREVENTIVO';
