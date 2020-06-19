<?php
$n1 = 2;
$n2 = 6;
$me = (($n1+$n2)/2);
$no = ' ';
echo ("-=-=-=NOTAS=-=-=-<br>");
echo ("‎‎‎‎‎‎‎‎-----$n1-----||------$n2-----<br>");
echo ("--1ºnota--||--2º nota--<br>");

if (($me>9)&&($me<=10)) {
	$no = 'A';
}	elseif (($me>7.5)&&($me<=9)) {
		$no = 'B';
}	elseif (($me>6)&&($me<=7.5)) {
		$no = 'C';
}	elseif (($me>4)&&($me<=6)) {
		$no = 'D';
}	elseif (($me>=0)&&($me<=4)) {
		$no = 'E';
}

switch ($no) {
	case 'A':
		echo("<br>A média do aluno foi: $me;");
		echo("<br>A menção foi 'A', sendo APROVADO.");
		break;
	case 'B':
		echo ("A média do aluno foi: $me;");
		echo("<br>A menção foi 'B', sendo APROVADO.");
		break;
	case 'C':
		echo ("A média do aluno foi: $me;");
		echo("<br>A menção foi 'C', sendo APROVADO.");
		break;
	case 'D':
		echo ("A média do aluno foi: $me;");
		echo("<br>A menção foi 'D', sendo REPROVADO.");
		break;
	case 'E':
		echo ("A média do aluno foi: $me;");
		echo("<br>A menção foi 'E', sendo REPROVADO.");
		break;
	default:
		echo "os valores estão incorretos.";
		break;
}
?>