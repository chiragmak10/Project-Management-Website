<?php
$file_content = "chirag";
$name = "file.zip"; // or file.pdf
header('Content-Description: File Transfer');
header('Content-Type: archive/zip'); // or archive/pdf
header('Content-Disposition: attachment; filename=' . $name);
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . strlen($file_content));
ob_clean();
flush();
echo $file_content;
exit;
?>


