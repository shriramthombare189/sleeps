<?php
$xml=simplexml_load_file("a.xml")or die("file no loded");
for ($i=0; $i < 4; $i++) { 
    if($xml->runs[$i]>1200){
        echo $xml->player[$i]."<br>";
        echo $xml->runs[$i]."<br>";
        echo $xml->wikets[$i]."<br>";
        echo $xml->notout[$i]."<br><br>";
    }
}
?>