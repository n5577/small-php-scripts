<?php
// scan a directory and list links to all of the files for a few extensions
$path    = './';
$documents = preg_grep('~\.(pdf|docx|txt|rtf|doc)$~i', scandir($path));
  foreach($documents as $document){
  	$documenturl = rawurlencode($document);
  		echo "<a href='$documenturl'>$document</a><br>";
	}
?>
