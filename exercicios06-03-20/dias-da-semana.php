<?php
	$d = 5;
	echo ("domingo ~ 1<br>segunda ~ 2<br>terça   ~ 3<br>quarta  ~ 4<br> quinta  ~ 5<br>sexta   ~ 6<br>sábado  ~ 7<br>")	;
	switch ($d) {
		case 1:
				echo "$d equivale à domingo";
			break;
		case 2:
			# code...
				echo "$d equivale à segunda";
			break;
		case 3:
			# code...
				echo "$d equivale à terça";
			break;
		case 4:
				echo "$d equivale à quarta";
			break;
		case 5:
			# code...
				echo "$d equivale à quinta";
			break;
		case 6:
			# code...
				echo "$d equivale à sexta";
			break;
		case 7:
			# code...
				echo "$d equivale à sábado";
			break;
		default:
				echo "$d não corresponde a valores toleráveis";
			break;
	}
?>