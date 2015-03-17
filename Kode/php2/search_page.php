<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="reservations.css">
<script src="reservations.js"></script>
</head>
<body>
	<form name="søk" action="reservator.php" method="POST">
		<fieldset>
			<legend>Booking Details: </legend>
			<label for="date">Når skal du booke?: </label><input id="date" type="datetime" name="date" pattern="[YYYY-mm-dd HH:MM]" value="<?php echo $date?>">
			<br>
			<label for="date_end">Hvor lenge skal dere bruke rommet?: </label><input id="date_end" type="datetime" name="date_end" pattern="[YYYY-mm-dd HH:MM]" value="<?php echo $date_end?>">
			<br>
			<label for="velgRom">Hvilket rom vil du booke?: </label><input id="velgRom" type="int" name="velgRom" pattern="[0-9]{1,2}" min="1" max="20">
			<br>
			<label for="name">Hvem booker?: </label><input id="name" type="text" name="name">
			<br>
			<input id="confirmBtn" type="submit" name="submit">
		</fieldset>
	</form>
<div id="wrapper">
   <div id="header"></div>
   <div id="rom">
      <?php echo $chart; ?>   
   </div>
</div>
</body>
</html>