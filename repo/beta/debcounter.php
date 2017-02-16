<?php

$dest = $_GET["dest"];

$counter = fopen("counter", "w+");

$counted = fread($counter, filesize("counter"));

fwrite($counter, (intval($counted)+1));

fclose($counter);

header("Location: {$dest}");

?>