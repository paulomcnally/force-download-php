<?php
$file_url = 'http://www.woo55.pk/adata/3256/06%20-%20Avril%20Lavigne%20-%20My%20Happy%20Ending-(www.SongsLover.com).mp3';
$file_name = end( explode( "/", $file_url ) );


header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"".$file_name."\""); 
readfile($file_url);
exit;
?>