<!DOCTYPE html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="invoice.php" method="post">
		<fieldset>
		<legend>Booking</legend>
		<p>
		<label>Event Type: </label>
		<select name="event">
			<option>Wedding</option>
			<option>Birthday</option>
			<option>Business Meeting/Conference</option>
		</select>
	</p><br>
		<label>Number of people: </label>
		<input type="text" name="number"> <br>
		<label> Date: </label>
		<input type="date" name="date">
	<input type="submit">
</fieldset>
</form>
<a href="#" class="previous round">&#8249;</a>
<a href="Halls.php" class="next round">&#8250;</a>
