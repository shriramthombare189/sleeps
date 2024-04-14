<?php
class add{
    private $a = 0;
    private $b = 0;

    function __construct(){
        $a = 5;
        $b = 5;
        
    echo"Addtion is a : ".$a+$b;
    }
}
 $a = new add;
 echo"<br>";
 print_r(get_class($a));
 echo"<br>";
 print_r(get_class_vars(get_class($a)));
 echo"<br>";
 print_r(get_class_methods($a));
 
?>