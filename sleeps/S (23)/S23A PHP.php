<?php
$x=simplexml_load_file("a.xml");
foreach($x->children()as$b){
    echo $b[0]['category']."<br>";
    echo $b->pname."<br>";
    echo $b->pid."<br>";
    echo $b->age."<br>";
}
?>