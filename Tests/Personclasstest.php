<?php
//@author Kwabena Aboagye-Otchere
require('../classes/personclass.php');

$time_start = microtime(true);
$kwabena = new personclass;
$time_end = microtime(true);
$time = $time_end - $time_start;
echo $time;

$time_start = microtime(true);
$kwabena->register("kwabena.aboagye@ashesi.edu.gh", "0243463643", "ab", "abc");
$time_end = microtime(true);
$time = $time_end - $time_start;
echo $time;

$time_start = microtime(true);
$a = $kwabena->login("kwabena.aboagye@ashesi.edu.gh", "ab");
echo $a;
$time_end = microtime(true);
$time = $time_end - $time_start;
echo $time;

$time_start = microtime(true);
$b = $kwabena->selectItem("iphone6s");
echo $b;
$time_end = microtime(true);
$time = $time_end - $time_start;
echo $time;

$time_start = microtime(true);
$c = $kwabena->selectPhone("iphone6s", "grey", 32, FALSE);
echo $c;
$time_end = microtime(true);
$time = $time_end - $time_start;
echo $time;

$time_start = microtime(true);
$kwabena->purchase(1, "XYZ");
$time_end = microtime(true);
$time = $time_end - $time_start;
echo $time;

?>