<?php

$dir = $_POST['dirpath'];

$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
foreach($objects as $file => $object){
	$filename = end(explode("/", $file));
	if ($filename != ".." and $filename != "." and strpos($filename, ".") != 0) {
		$files .= "," . $file;
	}
}

$files = trim($files, ",");
echo $files;




?>