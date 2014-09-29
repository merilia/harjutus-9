<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Funktsioonid ja nende defineerimine</title>
	<?php
		    function bg_color($value) {
		        return $value;
		    }

		    $color = bg_color("red");
		?>
	<style>
		body {
   			background-color: #fff123;
		}
  		.container {
			max-width: 200px;
		  	margin: 0 auto;
		  	padding: 10px;
		 	border: 1px solid red;
		 }
		 p{
		 	font-size: 18px;
		 	color: #104298;
		 }
  	</style>
</head>
<body>
	<h2>Funktsiooni defineerimine</h2>
		<h3>Argumendita funktsioon</h3>
				<?php
					function say_hello() {
						echo 'Minu esimene funktsioon!<br>';
					}
					say_hello();
				?>
		<h3>Argumendiga funktsioon</h3>
				<?php
					function say_hello_to($person) {
						echo "<div class='container'><p>Tere, {$person}!<br></p></div>";
					}
					say_hello_to("Merili");
				?>
				<?php
					say_hello();
					say_hello_to("Risto");
				?>
		<h3>Väärtuse tagastamine</h3>
				<?php
					function add($number1, $number2) {
						$sum = $number1 + $number2;
							return $sum;
					}
					$result = add(3, 4);
						echo $result;
				?>
		<h3>Mitme väärtuse tagastamine</h3>
			 <ul>
				<?php
					function calculate($nr1, $nr2) {
						$plus = $nr1 + $nr2;
						$minus = $nr1 - $nr2;
					return array($plus, $minus);
					}
					$result = calculate(10, 5);
						echo "<li>Numbrite summa on {$result[0]}</li>";
						echo "<li>Numbrite vahe on {$result[1]}</li>";
  
				?>
			</ul>
			<ol>
				<?php
					function calc($nr1, $nr2) {
						$plus = $nr1 + $nr2;
						$minus = $nr1 - $nr2;

					return array($plus, $minus);
					}

					list($plus, $minus) = array(100, 50);
						echo "<li>Numbrite summa on {$plus}</li>";
						echo "<li>Numbrite vahe on {$minus}</li>";
	
				?>
			</ol>	
</body>
</html>
