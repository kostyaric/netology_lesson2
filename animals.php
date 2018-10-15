<?php

	$arrContinentAnimals =
	[
		"Africa" =>
		[
			"Giraffa camelopardalis peralta",
			" Acinonyx   jubatus  ",
			"Pythonidae"
		],

		"Antarctica" =>
		[
			"Physeter macrocephalus",
			"Aptenodytes forsteri",
			"Balaenoptera borealis"
		],
		
		"Australia" =>
		[
			"Vombatidae",
			"Macropus",
			"Varanus komodoensis"
		],
		
		"Eurasia" =>
		[
			"Ailuropoda melanoleuca",
			"Camelus",
			"Canis lupus"
		],
		
		"North America" =>
		[
			"Haliaeetus leucocephalus",
			"Canis latrans",
			"Vulpes vulpes"
		],

		"South America" =>
		[
			"Desmodontinae",
			"Theraphosidae",
		]
	];

	foreach ($arrContinentAnimals as $continent => $arrAnimals) {

		foreach ($arrAnimals as $name) {
			
			if (str_word_count($name) == 2) {

				$arrWords = str_word_count($name, 1);

				$tooWordAnimals[] = $name;
				$firstWords[] = $arrWords[0];
				$secondWords[] = $arrWords[1];

			}

		}
	}

	shuffle($secondWords);

	foreach ($firstWords as $key => $firstName) {

		$fantasyAnimals[] = $firstName . ' ' . $secondWords[$key];

	}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Жестокое обращение с животными</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Генетические эксперименты над животными</h1>
<ol>
	<li>
		<h2>Исходный массив</h2>
		<?php print_r($arrContinentAnimals);?>
	</li>
	<li>
		<h2>Названия, состоящие из двух слов:</h2>
		<?php
			foreach ($tooWordAnimals as $name) {
				echo "<p>$name</p>";
			}
		?>
	</li>
	<li>
		<h2>"Фантазийные" названия:</h2>
		<?php
			foreach ($fantasyAnimals as $name) {
				echo "<p>$name</p>";
			}
		?>
	</li>
</ol>

</body>
</html>