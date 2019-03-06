<?php

include ('vendor/autoload.php');


// check if index or page is specified
if (!isset($_GET['url']))
{
  $filename = 'pages/index.md';
}else{
  $url = $_GET['url'];
  $filename = 'pages/'.$url.'.md';
}

if (!file_exists($filename)){
  $filename = 'pages/404.md';
}

$file_contents = file_get_contents($filename);

$mp = new Pagerange\Markdown\MetaParsedown();

echo $mp->text($file_contents); // prints HTML, without meta data
