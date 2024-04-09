<html>
    <body>
        <form action="" method="post"> 
<input type ="radio" name="r"value="1">Area<br>
<input type ="radio" name="r"value="2">circumference<br>
<input type="submit" value="calculet"> 
</form>
    </body>
</html>
<?php
$s  = $_POST['r'];
class circle{
 private $redius;
public function c($redius){
echo "area of circumfarance is a : ".(2*3.14*$redius);
}
public function a($redius){
echo "area of circal is a : ".(3.14*$redius*$redius);
}
}
$ob1 = new circle(5);

if($s==1){
$ob1->a(3);
}else if($s==2){
$ob1->c(2);
}
?>