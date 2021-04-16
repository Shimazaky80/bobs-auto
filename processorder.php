<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bob's Auto Parts - Order Results</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Order Results</h2>

	<?php  

		# creating short variable names
		# from form names via $_POST global variable
		$tireqty = $_POST['tireqty'];
		$oilqty = $_POST['oilqty'];
		$sparkqty = $_POST['sparkqty'];

		echo '<p>Your order is as follows: </p>';
		$tireqty = htmlspecialchars($tireqty);
		$oilqty = htmlspecialchars($oilqty);
		$sparkqty = htmlspecialchars($sparkqty);

		echo <<<theEnd

			$tireqty tires<br /> 
			$oilqty bottles of oil<br />
			$sparkqty spark plugs<br />

			theEnd;

		/* a more condensed way, but hard to read and prone to error
		echo htmlspecialchars($tireqty) . ' <span>tires</span><br />';
		echo htmlspecialchars($oilqty) . ' <spa>bottles of oil</span><br />';
		echo htmlspecialchars($sparkqty) . ' <span>spark plugs</span><br />';
		*/

		// price for each item on sale
		define('TIREPRICE', 100);
		define('OILPRICE', 10);
		define('SPARKPRICE', 4);

		$totalqty = 0;
		$totalamount = 0.00;

		echo '<p>Order processed successfully at ' . date('H:i, jS F Y') . '</p>';

	?>

	<p>
		<a href="http://localhost/training/orderform.html">Home</a>
	</p>
</body>
</html>