<?php

$x = 23;
var_dump($x);

$y = strval($x);
var_dump($y);

settype($x, "string");
var_dump($x);

$name = "john doe";

echo "\nstring length of $name => " . strlen($name);
echo "\nstr_word_count => " . str_word_count($name);
echo "\nstrrev => " . strrev($name);
echo "\nstrpos => " . strpos($name, 'o');
echo "\nstrcmp => " . strcmp($name, "john doe");
echo "\nstrcmp => " . strcmp($name, "Jane Doe");
echo "\nstrcasecmp => " . strcasecmp($name, "john doe");
echo "\nstrcasecmp => " . strcasecmp($name, "Jane Doe");
echo "\nstrtoupper => " . strtoupper($name);
echo "\nucfirst => " . ucfirst($name);
echo "\nsubstr_replace => " . substr_replace($name, 'J', 'XoXo');
echo "\nsubstr => " . substr($name, -3, 5);
