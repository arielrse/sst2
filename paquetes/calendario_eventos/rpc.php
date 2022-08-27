<?php
	include("../../funciones/motor.php");
	include('settings.php');
	
	$action = $_POST['action'];
	switch($action) {
	
	case 'startCalendar':
		$month = $_POST['month'];
		$year = $_POST['year'];
		
		if(($month == 0) || ($year == 0)) {
			$thisDate = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
		} else {
			$thisDate = mktime(0, 0, 0, $month, 1, $year);
		}
		
		echo '<div style="margin-bottom: 3px;">
					<form name="changeCalendarDate">
						<select id="ccMonth" onChange="startCalendar($F(\'ccMonth\'), $F(\'ccYear\'))">';
						
						for($i=0; $i<=11; $i++)
						{
							$monthNumber = ($i+1);
							$monthMaker = mktime(0, 0, 0, $monthNumber, 1, 2006);
							if($month > 0) {
								if($month == $monthNumber) {
									$sel = 'selected';
								} else {
									$sel = '';
								}
							} else {
								if(date("m", $thisDate) == $monthNumber) {
									$sel = 'selected';
								} else {
									$sel = '';
								}
							}
							$monthName = array('Enero',
												'Febrero',
												'Marzo',
												'Abril', 
												'Mayo',
												'Junio',
												'Julio',
												'Agosto',
												'Septiembre',
												'Octubre',
												'Noviembre',
												'Deciembre');
												

							echo '<option value="'. $monthNumber .'" '. $sel .'>'. $monthName[$i] .'</option>';
						}
						
				echo '</select>
						&nbsp;
						<select id="ccYear" onChange="startCalendar($F(\'ccMonth\'), $F(\'ccYear\'))">';
						
						$yStart = 2008;
						$yEnd = ($yStart + 6);
						for($i=$yStart; $i<$yEnd; $i++)
						{
							if($year > 0) {
								if($year == $i) {
									$sel = 'selected';
								} else {
									$sel = '';
								}
							} else {
								if(date("Y", $thisDate) == $i) {
									$sel = 'selected';
								} else {
									$sel = '';
								}
							}
							echo '<option value="'. $i .'" '. $sel .'>'. $i .'</option>';
						}
						
				echo '</select>';							
				echo '</form>
				</div>';
		
		// Display the week days.
		echo '<div class="calendarFloat" style="text-align: center; background-color: #'. $dayColor .';"><span style="position: relative; top: 4px;">Lun</span></div>
				<div class="calendarFloat" style="text-align: center; background-color: #'. $dayColor .';"><span style="position: relative; top: 4px;">Mar</span></div>
				<div class="calendarFloat" style="text-align: center; background-color: #'. $dayColor .';"><span style="position: relative; top: 4px;">Mie</span></div>
				<div class="calendarFloat" style="text-align: center; background-color: #'. $dayColor .';"><span style="position: relative; top: 4px;">Jue</span></div>
				<div class="calendarFloat" style="text-align: center; background-color: #'. $dayColor .';"><span style="position: relative; top: 4px;">Vie</span></div>
				<div class="calendarFloat" style="text-align: center; background-color: #'. $weekendColor .';"><span style="position: relative; top: 4px;">Sab</span></div>
				<div class="calendarFloat" style="text-align: center; background-color: #'. $weekendColor .';"><span style="position: relative; top: 4px;">Dom</span></div>';
				
		// Show the calendar.
		for($i=0; $i<date("t", $thisDate); $i++)
		{
			$thisDay = ($i + 1);
			if(($month == 0) || ($year == 0)) {
				$finalDate = mktime(0, 0, 0, date("m"), $thisDay, date("Y"));
				$today = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
				$fdf = mktime(0, 0, 0, date("m"), 1, date("Y"));
				$month = date("m");
				$year = date("Y");
			} else {
				$finalDate = mktime(0, 0, 0, $month, $thisDay, $year);
				$fdf = mktime(0, 0, 0, $month, 1, $year);
			}
			
			
			// Skip some cells to take into account for the weekdays.
			if($i == 0) {
				$firstDay = date("w", $fdf);
				$skip = ($firstDay - 1);
				if($skip < 0) { $skip = 6; }
				
				for($s=0; $s<$skip; $s++)
				{
					echo '<div class="calendarFloat" style="border: 1px solid #FFF;">&nbsp;</div>';
				}
			}
							
			// Make the weekends a darker colour.
			if((date("w", $finalDate) == 0) || (date("w", $finalDate) == 6)) {
				$bgColor = '#'. $weekendColor .'';
			} else {
				$bgColor = '#'. $dayColor .'';
			}
			
			// Determine what they should see if they are logged in or not.
			if($_COOKIE['nodstrumCalendarV2']) {
				$onClick = 'showEventForm('. $thisDay .')';
			} else {
				// displayEvents(day, $F('ccMonth'), $F('ccYear'));
				$onClick = 'displayEvents('. $thisDay .', '. $month .', '. $year .')';
			}
			
			// Check the database for any events on this day.
			$dayCheck = mysqli_query($conexion, "SELECT id_st_cronograma_informes FROM st_cronograma_informes WHERE fecha=FROM_UNIXTIME($finalDate + 3600,'%Y-%m-%d') LIMIT 1", $conexion);
			
			//echo"SELECT id_st_cronograma_informes FROM st_cronograma_informes WHERE fecha=FROM_UNIXTIME($finalDate,'%Y-%m-%d') LIMIT 1";
			if($dayCheck) {
				if(mysqli_num_rows($dayCheck) >0) {
					$bgColor = '#'. $eventColor .'';
				} else {
					// Check if this day is today and change it to the today color.
					if($finalDate == $today) {
						$bgColor = '#'. $todayColor .'';
					} else {
						// Dont change it.
					}
				}
			} else {
				// Nothing, ignore the error.
			}
			
			// Display the day.
			echo '<div class="calendarFloat" id="calendarDay_'. $thisDay .'" style="background-color: '. $bgColor .'; cursor: pointer;" 
									onMouseOver="highlightCalendarCell(\'calendarDay_'. $thisDay .'\')"
									onMouseOut="resetCalendarCell(\'calendarDay_'. $thisDay .'\')"
									onClick="'. $onClick .'">
						<span style="position: relative; top: '. $tTop .'; left: 1px;">'. $thisDay .'</span>
					</div>';
		}
		break;
	
	case 'listEvents':
		$day = $_POST['d'];
		$month = $_POST['m'];
		$year = $_POST['y'];
		
		$timeStamp = mktime(0,0,0, $month, $day, $year);
		
		$eventQuery = mysqli_query($conexion, "SELECT st.id_st_cronograma_informes, concat(u.nombre, ' ', u.ap_pat) as id_usuario, t.ubicacion 
FROM st_cronograma_informes st, usuarios u, st_trabajos t 
WHERE st.fecha=FROM_UNIXTIME($timeStamp + 3600,'%Y-%m-%d') AND st.id_usuario=u.id AND st.id_item=t.id_item
ORDER BY st.id_st_cronograma_informes DESC", $conexion);
		if($eventQuery) {
			if(mysqli_num_rows($eventQuery) >0) {
				echo '<hr><center><b><span class="azul">Eventos en: '. date("d", $timeStamp) .'/'. date("m", $timeStamp) .'/'. date("Y", $timeStamp) .'</span></b></center>';
				for($i=0; $i<mysqli_num_rows($eventQuery); $i++) {
					if($i % 2) { $bgColor = '#'. $iteratorColor1 .''; } else { $bgColor='#'. $iteratorColor2 .''; }
					extract(mysqli_fetch_array($eventQuery), EXTR_PREFIX_ALL, 'e');
					
					
						echo '<div style="background-color: '. $bgColor .'; margin-bottom: 4px; padding: 1px;" id="event_'.$e_id_st_cronograma_informes.'">
								<div>
									'.($i+1).': '. $e_id_usuario .' ['.$e_ubicacion.']
								</div>
							</div>';

				} // for.
			} else {
				echo 'No exite eventos en este dia';
			}
		} else {
			echo 'Ocurrio un Error.';
		}
		
		break;
			
		
	default:
		echo 'Whoops.';
		break;
	}

?>