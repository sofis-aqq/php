<?php
	$sal = 800;
	$sala = 0;
	echo "Seu salário de $sal sofrerá ajuste para:";
	if ($sal<=280) {
		# code...
				$sala = ($sal*0.2);
				$sal = ($sal+($sal*0.2));
		echo "<br> Com um aumento de 20%($sala reais), $sal reais será o novo sálario";
	} elseif (($sal>280)&&($sal<=700)) {
		# code...
				$sala = ($sal*0.15);
				$sal = ($sal+($sal*0.15));
		echo "<br> Com um aumento de 15%($sala reais), $sal reais será o novo sálario";
	} elseif (($sal>700)&&($sal<=1500)) {
		# code...
				$sala = ($sal*0.1);
				$sal = ($sal+($sal*0.1));
		echo "<br> Com um aumento de 10%($sala reais), $sal reais será o novo sálario";
	} elseif ($sal>1500) {
		# code...
				$sala = ($sal*0.05);
				$sal = ($sal+($sal*0.05));
		echo "<br> Com um aumento de 05%($sala reais), $sal reais será o novo sálario";
	}

?>
