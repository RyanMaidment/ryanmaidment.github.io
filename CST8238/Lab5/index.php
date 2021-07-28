<html>
	<head>
		<title>CST 8238 - Web Programming</title>
		<link rel="stylesheet" type="text/css" href="Style.css" />
	</head>
	<body>
	<?php
				include_once "header.php";
				include_once "menu.php";
	$firstName = 'Ryan';
	$lastName = 'Maidment';
	define("studentNum", "040932067");
	define("helloworld", "Hello World!!");
	define("firstPHP", "This is the first time I am using PHP!!");

	echo '<div class="content">';
	echo '<h3><b>';
	echo $firstName;
	echo " ";
	echo $lastName;
	echo "<br>";
	echo "Student Number:";
	echo studentNum;
	echo '</b></h3>';
	echo '<p style="padding-top: 10px;">';
	echo helloworld;
	echo firstPHP;
	echo '</p>';
	echo '</div>';

			include_once "footer.php";
		?>
	</body>
</html>