<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="reservations.css">
    <script src="reservations.js"></script>
</head>
<body>
	<form name="søk" action="search_page.php" method="POST">
		<fieldset>
			<legend>Booking Details: </legend>
			<label for="date">Når skal du booke?: </label><input id="date" type="datetime" name="date" pattern="[YYYY-mm-dd HH:MM]" value="YYYY-mm-dd HH:MM"">
			<br>
			<label for="date_end">Hvor lenge skal dere bruke rommet?: </label><input id="date_end" type="datetime" name="date_end" pattern="[YYYY-mm-dd HH:MM]" value="YYYY-mm-dd HH:mm">
			<br>
			<label for="numberOfPeople">Hvor mange skal bruke rommet?: </label><input id="numberOfPeople" type="number" name="numberOfPeople" min="2" max="4" value="2">
			<br>
			<label for="Prosjektor">Trenger dere Prosjektor? Ja: </label><input id="Prosjektor" type="radio" name="prosjektor" value="P">
			<label for="ikkeProsjektor">Nei: </label><input id="ikkeProsjektor" type="radio" name="prosjektor" value="iP">
			<br>
			<input id="confirmBtn" type="submit" name="submit">
		</fieldset>
	</form>
<div id="wrapper">
   <div id="header"></div>
   <div id="rom">

   </div>
</div>
</body>
</html>