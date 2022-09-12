<?php
define('FTITLE', 'F. Verificación Visual - Estado del Activo');
define('F01', 'F.1  Estado de ductos de fluidos de combustible');
define('F02', 'F.2	Estado de ductos de fluidos de refrigerante (agua)');
define('F03', 'F.3	Fuga de combustibles');
define('F04', 'F.4	Fuga de lubricantes');
define('F05', 'F.5	Fuga de refrigerante');
define('F06', 'F.6	Fuga en la bomba combustible');
define('F07', 'F.7	Estado de ducto de escapes');
define('F08', 'F.8	Estado físico de batería de arranque');
define('F09', 'F.9	Estado conexiones eléctricas');
define('F10', 'F.10 Estado físico de display');
define('F11', 'F.11	Estado de cargador de batería');
define('F12', 'F.12	Estado de Limpieza del grupo');
define('F13', 'F.13	Estado de indicadores luminosos (leds, focos) en el tablero de Control.');
define('F14', 'F.14	Estado de la protección Transiente de 2do Nivel');
define('F15', 'F.15	Estado de correcta conexión a tierra');
define('F16', 'F.16	Verificación de los medidores en el panel de control.');

define('GTITLE',  'G. Desarrollo de Rutina de Mantenimiento');
define('G.1',     'G.1		GRUPO ELECTRÓGENO');
define('G.1.1',   'G.1.1	Verificación del grupo electrógeno sin carga: monofásico/trifásico');
define('G.1.1.1', 'G.1.1.1	Voltaje de salida del grupo sin carga [VAC]');
define('G.1.1.2', 'G.1.1.2	Frecuencia sin carga [Hz]');
define('G.1.2',   'G.1.2	Verificación del grupo electrógeno con carga: monofásico/trifásico');
define('G.1.2.1', 'G.1.2.1	Voltaje de salida del grupo con carga [VAC]');
define('G.1.2.2', 'G.1.2.2	Corriente de salida del grupo en servicio [A]');
define('G.1.2.3', 'G.1.2.3	Frecuencia con carga [Hz]');
define('G.1.3',   'G.1.3	Verificación baterías de arranque');
define('G.1.3.1', 'G.1.3.1	Prueba de arranque con el grupo generador');
define('G.1.3.2', 'G.1.3.2	Verificar voltaje [VDC]');
define('G.1.3.3', 'G.1.3.3	Verificar corriente de carga con el grupo encendido [A]');
define('G.1.3.4', 'G.1.3.4	Asegurar terminales de las baterías de arranque');
define('G.1.3.5', 'G.1.3.5	Limpiar las baterías de arranque');
define('G.1.3.6', 'G.1.3.6	Verificar la temperatura superficial en operación [°C]');
define('G.1.4',   'G.1.4	Mantenimiento con el motor apagado y frio:');
define('G.1.4.1', 'G.1.4.1	Verificar el nivel de aceite en el "Carter" (varilla nivel en el rango de bajo a alto)');
define('G.1.4.2', 'G.1.4.2	Verificar el estado del aceite (en la varilla)');
define('G.1.4.3', 'G.1.4.3	Limpiar el filtro de aire');
define('G.1.4.4', 'G.1.4.4	Ajustar la tensión en las correas impulsoras de las turbinas de aire');
define('G.1.4.5', 'G.1.4.5	Verificar el nivel de refrigerante en el radiador (agua + liquido refrigerante)');
define('G.1.4.6', 'G.1.4.6	Verificar si la rejilla de salida de aire (libre de obstrucciones)');
define('G.1.4.7', 'G.1.4.7	Ajuste en bornes y/o terminales de todas las conexiones eléctricas');
define('G.1.4.8', 'G.1.4.8	Verificar el ajuste del ventilador al alternador');
define('G.1.4.9', 'G.1.4.9	Verificar el libre desplazamiento del flotador en el tanque de combustible');
define('G.1.4.10', 'G.1.4.10 Verificar la temperatura superficial del precalentador [°C]');
define('G.1.5',   'G.1.5	Mantenimiento con el motor en funcionamiento:');
define('G.1.5.1', 'G.1.5.1	Verificar la operación de las bombas de inyección de combustible');
define('G.1.5.2', 'G.1.5.2	Verificar temperatura del motor en operación [°C]');
define('G.1.5.3', 'G.1.5.3	Verificar revoluciones del motor en operación [RPM]');

define('G2TITLE', 'G.2 TANQUE DE COMBUSTIBLE EXTERNO');
define('G2_01', 'G.2.1	Verificar el estado del ducto trasvase de combustible del tanque externo');
define('G2_02', 'G.2.2	Verificar el funcionamiento de la bomba trasvase externa de combustible');
define('G2_03', 'G.2.3	Verificar el sensor de nivel del tanque externo de combustible');
define('G2_04', 'G.2.4	Drenar el agua y sedimento mediante válvula purgadora del tanque externo');

define('G3TITLE', 'G.3	SISTEMA DE TRANSFERENCIA AUTOMÁTICO INTEGRADO');
define('G3_01', 'G.3.1		Pruebas de funcionamiento automático');
define('G3_02', 'G.3.1.1	Tiempo de arranque automático y transferencia a carga (seg)');
define('G3_03', 'G.3.1.2	Tiempo de retransferencia automática  y parada (seg)');
define('G3_04', 'G.3.2		Mantenimiento del sistema de transferencia automático integrado');
define('G3_05', 'G.3.2.1	Verificación de operativa de transferencia Manual');
define('G3_06', 'G.3.2.2	Verificación de etiquetado de cables de energía');
define('G3_07', 'G.3.2.3	Verificación de fusibles de protección');
define('G3_08', 'G.3.2.4	Verificación de relés de control');

?>