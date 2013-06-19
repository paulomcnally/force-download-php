<?php
$file_url = ( isset( $_GET['url'] ) && !empty( $_GET['url'] ) ) ? base64_decode($_GET['url']) : NULL;

if( is_null( $file_url ) ){
header("Location: https://play.google.com/store/apps/details?id=com.mc.mp3chief");
exit;
}
else{
$file_name = end( explode( "/", $file_url ) );
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"".$file_name."\""); 
readfile($file_url);
exit;
}

?>