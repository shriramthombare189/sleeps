<?php
$n = $_GET["q"];
$f = 1;
for ($i=1; $i <= $n; $i++) { 
    $f = $f*$i;
}
echo $f;
?>