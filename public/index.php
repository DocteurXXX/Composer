<?php

require ('../vendor/autoload.php');


$world = new App\Wcs\Hello();
$composer = new \HelloWorld\SayHello();

echo $world->talk();
echo "<br/>";
echo $composer->world();







