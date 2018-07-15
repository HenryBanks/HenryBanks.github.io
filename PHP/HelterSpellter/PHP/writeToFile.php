<?php
	$fileName=$_POST["filename"];
	$text1=$_POST["name"];
	$text2=$_POST["score"];

	if($text1 != "")
	{
		echo("Message successfully sent");
		echo("Field 1:".$text1);
		echo("Field 2:".$text2);
		$file=fopen($fileName,"a");
		fwrite($file, $text1);
		fwrite($file, " ");
		fwrite($file, $text2);
		fwrite($file, ",");
		fclose($file);
	}else{
		echo("Message delivery failed");
	}

?>