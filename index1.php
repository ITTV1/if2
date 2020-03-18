<?php
$a = 10 * 200;
$b = "" . (10 * 200);
echo "$a:".gettype($a).", $b:".gettype($b); // выведет "200:integer, 200:string"
?>
