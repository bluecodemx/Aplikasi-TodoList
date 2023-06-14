<?php
require_once "Helper/input.php";

$name = input ("Name");
$kampus = input ("Kampus");
echo "Hello $name".PHP_EOL;
echo "Asal Dari Kampus $kampus";