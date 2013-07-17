<?php
	$new_sentence="";
	if (isset($_POST['sentence'])&&!empty($_POST['sentence']))
	{
	 $sentence=$_POST["sentence"];
	 $word=$_POST["word"];
	  $replace=$_POST["replace"];
	  
	  $position=strpos($sentence,$word);
	  
	  
	  
	  $new_sentence=substr_replace($sentence,$replace,$position, strlen($word));
	  
	 } 
?>

<form action="welcome.php" method="POST">
	Enter the sentence you want to modify :</br><textarea name="sentence"  rows="6" cols="30" ><?php echo $new_sentence; ?></textarea></br></br>
	Enter the word to be replaced:	</br>	<input name="word" type="text"></br>
	Enter the word to be replaced with:</br> <input name="replace" type="text"></br></br>
	<input type="submit" value="Submit">
	</form>
 