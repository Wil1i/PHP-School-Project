<!DOCTYPE html>

<html>
	<head>
		<title>Shayan NasrAbadi's Practice</title>
	</head>

	<body>
		<?php
			$tool = array(10, 20, 30, 40, 50);
			$arz = array(5, 10, 15, 20, 25);
			
			// Mostatil
			$masahatMostatil = $tool[0] * $arz[0];
			$mohitMostatil = $tool[0] + $arz[0] * 2;
			echo("Masahat Mostatil : " .$masahatMostatil. "<b>Mohit Mostatil : " .$mohitMostatil);

			echo("<b><b>")

			// Dayere
			$masahatDayere = $tool[1] * 3.14;
			$mohitDayere = $arz[1] * $arz[1] * 3.14;
			echo("Masahat Dayere : " .$masahatDayere. "<b>Mohit Dayere : " .$mohitDayere);

			echo("<b><b>");

			// Moraba
			$masahatMorabaa = $tool[2] * $tool[2];
			$mohitMorabaa = $tool[2] * 4;
			echo("Masahat Morabaa : " .$masahatMorabaa. "<b>Mohit Morabaa : " .$mohitMorabaa);

			// Made by Shayan NasrAbadi | 2023 Feb 28 | 19:32
		?>
	</body>
</html>
