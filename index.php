<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lists</title>
</head>
<body>
	<div class = "list">
		<h2>Ordered List items</h2>
			<ol>
				<?php
					$items  = "shoes, tie, shirt, shorts, blouse";
					$values =  explode(",",$items);
					foreach ($values as $str) {
					echo "<li> $str </li> \n";
					}
				?>
			</ol>
		<h2>Unordered List items</h2>
			<ul>
				<?php
					$items  = "shoes, tie, shirt, shorts, blouse";
					$values =  explode(",",$items);
					foreach ($values as $str) {
					echo "<li> $str </li>\n";

					}
				?>
			</ul>

</div>
</body>
</html>
