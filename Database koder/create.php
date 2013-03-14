<?php
		include 'connection.php';
		
		$name = $_POST['inputName'];
		$pswd = $_POST['inputPswd'];
		$mail = $_POST['inputMail'];
		$dropList = $_POST['dropList'];
		
		
		if(!$_POST['submit'])
		{
			echo "please fill out the form";
			header('Location: index.php');
		}
		else
		{
			mysql_query("INSERT INTO members (`Brukernavn`, `Passord`, `Epost`, `Rolle`)
									VALUES ('$name', '$pswd', '$mail', '$dropList') ") or die (mysql_error('The database is currently being invaded by goblins. Please try again later.'));
			echo "User has been added!";
			header('Location: index.php');
		}


?>