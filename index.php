<?php

include ('vendor/autoload.php');

$Parsedown = new Parsedown();

$file_contents = file_get_contents('pages/index.md');

echo $Parsedown->text($file_contents); # prints: <p>Hello <em>Parsedown</em>!</
