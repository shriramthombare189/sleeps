<?php
$a = $_GET['t1'];

$con = mysqli_connect("localhost","root","","work")or die("connection failed".mysqli_connect_error());

$sql = "SELECT `eno`, `ename`, `dis`, `salary` FROM `emp` WHERE ename='$a'";

$rs = mysqli_query($con,$sql)or die("Error for qury");

if(mysqli_num_rows($rs)>0){
    while ($row = mysqli_fetch_array($rs)) {
        echo"Employee number is a : ".$row['eno']."<br>";
        echo"Employee number is a : ".$row['ename']."<br>";
        echo"Employee number is a : ".$row['dis']."<br>";
        echo"Employee number is a : ".$row['salary']."<br>";
    }
}else{
    echo"Rcord is not found ";
}

?>