<?php

$name="aman is a gangsta";
echo $name;
echo "<br>";

echo "The length of my string is ".strlen($name);
echo "<br>";

echo str_word_count($name);
echo "<br>";

echo strrev($name);
echo "<br>";

echo strpos($name,"is");
echo "<br>";

echo str_replace("gangsta","dabang",$name);
echo "<br>";

echo str_repeat($name,3);
echo "<br>";

echo "<pre>";
echo rtrim("    He is a good man     ");
echo "<br>";
echo ltrim("    He is a good man     ");
echo "</pre>";
echo "<br>";
?>