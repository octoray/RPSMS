<?php
$myFile = '/usr/share/nginx/demorpsms/inproclog.txt';
if (!file_exists($myFile)) {
    print 'File not found';
}
else if(!$fh = fopen($myFile, 'w')) {
    print 'Can\'t open file';
}
else {
    print 'Success open file';
}

//$myfile = fopen("inproclog.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>