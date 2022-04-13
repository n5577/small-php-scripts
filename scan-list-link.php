// simple script that scans a directory and links all of the files of a few extensions

<?php
$path    = './';
$documents = preg_grep('~\.(pdf|docx|txt|rtf|doc)$~i', scandir($path));
  foreach($documents as $document){
  	$documenturl = rawurlencode($document);
  		echo "<a href='$documenturl'>$document</a><br>";
	}
?>