<?php

$x = 23;
var_dump($x);

$y = strval($x);
var_dump($y);

settype($x, "string");
var_dump($x);
