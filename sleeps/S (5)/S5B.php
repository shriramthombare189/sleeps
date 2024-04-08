<?php
$a = $_GET['t1'];
$con = mysqli_connect("localhost","root","","work")or die("connection fail...".mysqli_connect_error());

$sql = "SELECT `sno`, `sname`, `std`, `marks`, `per` FROM `student` WHERE std='$a'";

$rs=mysqli_query($con,$sql)or die("sql faild");

    if (mysqli_num_rows($rs)>0) {
        while ($row = mysqli_fetch_array($rs)) {    
            echo "<br>Student roll Number is a : ".$row['sno'];
            echo "<br>Student Name is a : ".$row['sname'];
            echo "<br>student marks is a : ".$row['marks'];
            echo "<br>Student percentag is a :".$row['per'];
        } 
    }else{
        echo"Record not found....";
    }
?>