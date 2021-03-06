<?php
include_once("connect.php");

$tbl_available = "CREATE TABLE IF NOT EXISTS available (
									id int(11) NOT NULL AUTO_INCREMENT,
									roomnum varchar(50) NOT NULL,
					avail int(11) NOT NULL,
					prosjektor varchar(3) NOT NULL,
					etasje int(11) NOT NULL,
					PRIMARY KEY(id)
					)";
$query = mysqli_query($connect, $tbl_available);
if ($query === TRUE) {
		echo "<h3>available table created</h3>";
	} else {
		echo "<h3>available table NOT created</h3>";
	}
$tbl_confirms = "CREATE TABLE IF NOT EXISTS confirms (
								id int(11) NOT NULL AUTO_INCREMENT,
								roomnum varchar(50) NOT NULL,
								start_date datetime NOT NULL,
								end_date datetime NOT NULL,
								navn varchar(50) NOT NULL,
								PRIMARY KEY (id)
								)";
$query = mysqli_query($connect, $tbl_confirms);
if ($query === TRUE) {
		echo "<h3>confirms table created</h3>";
	} else {
		echo "<h3>confirms table NOT created</h3>";
	}

$tbl_insert = "INSERT INTO available (roomnum, avail, prosjektor, etasje)
								VALUES ('Rom 1', 1, 0, 1),
								('Rom 2', 1, 1, 1),
								('Rom 3', 1, 0, 1),
								('Rom 4', 1, 1, 1),
								('Rom 5', 1, 0, 1),
								('Rom 6', 1, 1, 1),
								('Rom 7', 1, 0, 1),
								('Rom 8', 1, 1, 1),
								('Rom 9', 1, 0, 1),
								('Rom 10', 1, 1, 1),
								('Rom 11', 1, 0, 2),
								('Rom 12', 1, 1, 2),
								('Rom 13', 1, 0, 2),
								('Rom 14', 1, 1, 2),
								('Rom 15', 1, 0, 2),
								('Rom 16', 1, 1, 2),
								('Rom 17', 1, 0, 2),
								('Rom 18', 1, 1, 2),
								('Rom 19', 1, 0, 2),
								('Rom 20', 1, 1, 2)";
$query = mysqli_query($connect, $tbl_insert);
if ($query === TRUE) {
		echo "<h3>Starting data inserted</h3>";
	} else {
		echo "<h3>NOT inserted</h3>";
	}
?>