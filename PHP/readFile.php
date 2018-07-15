<?php
	$fileName=$_POST["filename"];

	$file = fopen($fileName,"r");
	echo fread($file, filesize($fileName));
	fclose($file);
?>