<?php
//////////   password check ///////////////
$match = 'pass123';

if (isset($_POST['password'])) {
	$password = $_POST['password'];
	if (!empty($password)) {
		if ($password==$match) {	
			echo 'That is correct!';
		}	else {
			echo 'That is incorrect!';
		}
	}	else {
		echo 'Please enter a password';
	}
}

///////////////// SESSION ////////////////////

session_start();

if (isset($_SESSION['username'])) {
	echo 'Welcomr, '.$_SESSION['username'];
}	else {
	echo 'Please log in.';
}

/* needs a different file to unset

unset($_SESSION['username']);*/

////////////////////  COOKIES  ////////////////
//main page
setcookie('username', 'alex', time() + 20);
//other page
echo $_COOKIE['username'];


/////////////////////////////////////////////
?>

<!-------   password check   ---------------->
<form action="index.php" method="POST">
	password:<br>
	<input type="password" name="password"><br><br>
	<input type="submit" value="Submit">
</form>



