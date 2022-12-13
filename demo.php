<?php
$zip_file="Upload/".$_GET["nm"];

     
if (file_exists($zip_file)) 
    { 
        header('Content-type: application/zip');
	header('Content-Disposition: attachment; filename="'.basename($zip_file).'"');
	header("Content-length: " . filesize($zip_file));
	header("Pragma: no-cache");
	header("Expires: 0");
        
        ob_clean();
	flush();
        readfile($zip_file);
        //unlink($zip_file);
    }
 else {
        echo 'not exits';
}
?>