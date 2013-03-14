<?php
		include 'connection.php';
		
		$query = "SELECT * FROM members";
		
		$result = mysql_query($query);
		
		while($member = mysql_fetch_array($result)) {
			echo "<h3>" . $member['Brukernavn'] . "</h3>";
		//	echo "<p>" . $member['Passord'] . "</p>";
			echo "<p>" . $member['Epost'] . "</p>";
			echo "<p>" . $member['Rolle'] . "</p>";
		}
?>

	<!-- Textboxes for inserting information -->
<h1>Create your account</h1>
<form action="create.php" method="post">
	<input type="text" name="inputName" value="Enter name" /><br />
	<input type="password" name="inputPswd" value="Enter Password" /><br />
	<input type="email" name="inputMail" value="Enter email adress" />
	<br />
	<br />
	
	<!-- Drop box for choosing role -->
	<select name="dropList">
		<option value="Default">Choose Role</option>
		<option value="Audio Designer">Audio Designer</option>
		<option value="Game Designer">Game Designer</option>
		<option value="Graphics Designer">Graphics Designer</option>
		<option value="Programmer">Programmer</option>
	</select>

	
	<input type="submit" name="submit" />
	
	
	
</form>