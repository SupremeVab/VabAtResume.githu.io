<?php

$file = $_GET['file'] . ".pdf" ;

header("content-disposition: attachment; filename=" . urlencode($file));

$show = fopen($file, "r");

while(!feof($show))
{
    echo fread($show, 8192);
    flush();
}

fclose($show);



?>