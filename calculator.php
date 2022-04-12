<html>
<head>
<title>CALCULATOR</title>
</head>
<?php

    //Grab first number, second number, and operation
    $fn = $_POST['fn'];
    $sn = $_POST['sn'];
    $op = $_POST['op'];
    
    //Result
    $Result = '';
    //If valid number input
	if (is_numeric($fn) && is_numeric($sn)) {
  
    //run switch statement for specific operators
		switch ($op) {
			case "Add":
				echo "<h2><b><center>Selected 'ADD'</center></b></h2>";
				$Result = $fn + $sn;
				break;
			case "Subtract":
				echo "<h2><b><center>Selected 'SUBTRACT'</center></b></h2>";
				$Result = $fn - $sn;
				break;
			case "Multiply":
				echo "<h2><b><center>Selected 'MULTIPLY'</center></b></h2>";
				$Result = $fn * $sn;
				break;
			case "Divide":
				echo "<h2><b><center>Selected 'DIVIDE'</center></b></h2>";
				$Result = $fn / $sn;
				break;
			case "Power":
				$Result = Math.pow($fn, $sn);
				$Result = substr($Result, 4);
				echo "<h2><b><center>Selected 'POWER'</center></b></h2>";
				break;
		}
	}
?>
<link rel="stylesheet" href="calc.css">
<body>
	<center>
		<table>
			<tr><th><h1>-- PHP Calculator--</h1></th></tr>
			<form action="" method="post" id="quiz-form">
				<tr><td><b>Number 1:  </b><input type="number" class="input" name="fn" required="required" value="<?php echo $fn; ?>" /> 
				</td></tr>
				<br><br>
				<tr>
				<td>
					<b>Number 2:  </b><input type="number" class="input" name="sn" required="required" value="<?php echo $sn; ?>" /> 
				</td></tr>
				<br><br>
				<tr>
					<td>
          <--! Prints result in text field -->
						<b>Result:  </b><input readonly="readonly" class="input" name="Result" value="<?php echo $Result; ?>"> 
				</td></tr>
				<br>
				<br>
				<tr>
					<td>
						<input type="submit" class="button" name="op" value="Add" />
						<input type="submit" class="button" name="op" value="Subtract" />
						<input type="submit" class="button" name="op" value="Multiply" />
						<input type="submit" class="button" name="op" value="Divide" />
						<input type="submit" class="button" name="op" value="Power" />
				</td></tr>
			</form>
		</table>

	</center>
</body>
</html>
