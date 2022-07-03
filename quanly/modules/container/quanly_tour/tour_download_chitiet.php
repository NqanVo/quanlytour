<?php
include('../../../config/config.php');
$name_file = $_GET['namefile'];
$file= "chitiettour_pdf/$name_file";

$time = time();
$name_file_download = $time." ".$name_file;


//Check the file exists or not
if(file_exists($file)) {

//Define header information
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Content-Length: ' . filesize($file));
header('Pragma: public');

//Clear system output buffer
flush();

//Read the size of the file
readfile($file);

//Terminate from the script
die();
}
else{
echo "File does not exist.";
}

?>