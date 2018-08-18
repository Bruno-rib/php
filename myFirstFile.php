<?php

$time = time();
$actual_time = date('D d M Y @ H:i:s', $time);

echo 'The current date/time is '.$actual_time;
//   1    //////////////////////////////////////////////////

if (isset($_POST['roll'])) {
	$rand = rand(1, 6);
	echo 'You rolled a '.$rand;
}
////   2   //////////////////////////////////////////////
if (isset ($_GET['day'])
&&isset($_GET['date']) &&isset($_GET['year'])) {
	$day = $_GET['day'];
	$date = $_GET['date'];
	$year = $_GET['year'];
	if(!empty($day)&&!empty($date)&&!empty($year)) {
		echo 'It is '.$day.' '.$date.' '.$year;
	}	else {
		echo 'Fill in all fields.';
	}
}



?>

<!---------------------   1   ------------------->
<form action="index.php" method="POST">
	<input type="submit" name="roll" value="Roll dice.">
</form>
<!---------------------   2   ----------------->
<form action="index.php" method="GET">
	Day:<br><input type="text" name="day"><br>
	Date:<br><input type="text" name="date"><br>
	Year:<br><input type="text" name="year"><br><br>
	<input type="submit" value="Submit">
</form>