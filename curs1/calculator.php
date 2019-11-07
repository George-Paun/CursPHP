<?php
var_dump($_GET);
$x = $_GET['x'];
$op = $_GET['op'];
$y = $_GET['y'];

$rez = $x + $y;
echo "Rezultatul este $rez";