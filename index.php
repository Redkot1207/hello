<?php
require 'vendor/autoload.php';
 
use Composer\Hello\FirstClass\ClassHello;
 
echo ClassHello::writeHello() . "\n";

$echoHello = new ClassHello();
echo $echoHello->writeHello();