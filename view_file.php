<?php
$name = $_GET['name'];
$file = 'https://port-3000-php-manvisoftwares.preview.codeanywhere.com/508bytes/uploads/'.$name; // or .docx
$filename = basename($file);

header("Content-Type: application/octet-stream");
header("Content-Disposition: inline; filename=\"$filename\"");
header("Content-Length: " . filesize($file));
readfile($file);
exit;
?>