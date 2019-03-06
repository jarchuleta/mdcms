<?php
include ('vendor/autoload.php');

$mp = new Pagerange\Markdown\MetaParsedown();


if (isset($_GET['url'])){
  $url = $_GET['url'];

  $filename = 'pages/'.$url.'.md';
  echo $filename;

  if (!file_exists($filename)){

    $filename = 'pages/index.md';

  }

}else{
    $filename = 'pages/index.md';
}

$markdown = file_get_contents($filename);

echo $mp->text($markdown); // prints HTML, without meta data


 ?>
