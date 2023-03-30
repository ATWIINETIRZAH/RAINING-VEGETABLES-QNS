<!DOCTYPE html>
<html>
<head>
	<title>Guess My Name Game</title>
</head>
<body>
	<h1>Guess My Name Game</h1>
	<?php

		if(isset($_POST['submit'])) {//checks if the user has submitted the name
			$myName = "Tirzah"; // The name to be guessed
			$userName = $_POST['userName']; // The user's guessed name
			if(strtolower($userName) == strtolower($myName)) {//changes the letters to lowercase
				echo "<p>Congratulations! You guessed my name correctly.</p>";
			} else {
				echo "<p>Sorry, that's not my name. Please try again.</p>";
			}
		}
	?>
    <!--the code below creates the buttons for submitting the guessed name and also provides an input field for the user to put in the guessed name-->
	<form method="post" action="">
		<label for="userName">Guess My Name:</label>
		<input type="text" id="userName" name="userName" required>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>

