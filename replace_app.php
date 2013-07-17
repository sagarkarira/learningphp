<?php
	
			echo$sentence = $_POST["sentence"];
	echo $word = $_POST["word"];
	echo $replace = $_POST["replace"];


?>
<hr>
 <form action="welcome.php" method="post">
	<textarea name="sentence"  rows="6" cols="30" ></textarea></br></br>
	Enter the word to be replaced:		<input name="word" type="text"></br>
	Enter the word to be replaced with: <input name="replace" type="text"></br>
	<input type="submit" value="Submit">
	</form>