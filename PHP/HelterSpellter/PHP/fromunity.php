<?php
	$text1=$_POST["name"];
	$text2=$_POST["score"];

	if($text1 != "")
	{
		echo("Message successfully sent");
		echo("Field 1:".$text1);
		echo("Field 2:".$text2);
		$file=fopen("data.txt","a");
		fwrite($file, $text1);
		fwrite($file, $text2);
		fclose($file);
	}else{
		echo("Message delivery failed");
	}

?>