<?php
			date_default_timezone_set('Europe/Amsterdam');
			$hour = date('H');
			$text = "hallo";
				if ($hour >= 6 && $hour < 12 ) {
				$text = "Goede morgen!";
				$style = "morning";
			}
				elseif ($hour >= 12 && $hour < 18 ) {
         $text = "Goede middag!";
				 $style = "afternoon";
				}
				elseif ($hour >= 18	&& $hour < 24) {
					$text = "Goede avond!";
					$style = "evening";
			}
				elseif ($hour >= 0 && $hour < 6) {
					$text = "Goede nacht!";
					$style = "night";
			}

?>

<html>
	<head>
	<title><?php echo $text; ?></title>
		<link rel="stylesheet" type="text/css" href="./css/Style.css" />
	</head>
	<div class="content">
	<body class="<?php echo $style; ?>">
	
		<?php
			echo "<p class=\"goodday\">$text</p>";
			echo "<p class=\"goodday\">$text</p>";
			echo "<p class=\"time\">Het is nu " . date("H:i</p>");
			echo "<p class=\"aai\">Het is nu" . date(H:i)
		?>
	</div>
	</body>
</html>