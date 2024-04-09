<html>
    <body>
        <form action="" method="post"> 
Enter the frist value : <input type ="text" name="t1"><br>
Enter the secound value  : <input type ="text" name="t2"><br>
<input type ="radio" name="r"value="1">Addtion<br>
<input type ="radio" name="r"value="2">Subtraction<br>
<input type ="radio" name="r" value="3">Multification<br>
<input type="submit" value="calculet"> 
</form>
    </body>
</html>
<?php
$v1 = $_POST['t1'];
$v2 = $_POST['t2'];
$s  = $_POST['r'];
if($s==1){
echo $v1+$v2;
}else if($s==2){
echo $v1-$v2;
}else{
echo $v1*$v2;
}
?>