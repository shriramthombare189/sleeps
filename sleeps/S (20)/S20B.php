
<html>
<body>
<form action="" method="post">
Enter the value : <input type="text"name="v">
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
$n = $_POST['v'];
$a = 0;
$b = 1;
for ($i=0; $i < $n; $i++) { 
    echo $a."<br>";
    $c = $a + $b;
    $a = $b;
    $b = $c;
}
echo"Sum of digit is a : ";
for($i=0;$i<$n;$i++){
    $i = $i + $i;
}
echo $i;
?>