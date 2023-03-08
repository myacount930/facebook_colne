<?php

$myfile = fopen("location.txt", "w");

$txt = "lat:".$_GET["lat"]."\n"."lon:".$_GET["lon"]."\n"."ip:".$_SERVER['REMOTE_ADDR'];
fwrite($myfile, $txt);
fclose($myfile);

?>