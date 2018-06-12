<?php

$myfile = fopen("27ncc.txt", "r")
or
die("unable to open file");
echo fread($myfile, filesize("27ncc.txt"));

fclose($myfile);
?>