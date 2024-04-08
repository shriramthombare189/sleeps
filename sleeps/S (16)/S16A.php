<html>
    <body>
        <form action="" method="post">
            Enter the string : <input type="text"name="in" value="<?php if(isset($_POST['in'])) echo $_POST['in'] ?>"><br>
            Enter the string : <input type="text"name="in2" value="<?php if(isset($_POST['in2'])) echo $_POST['in2']?>"><br>
            <input type="submit"">
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"] =="POST"){
            $in = $_POST['in'];
            $in2 = $_POST['in2'];
            if($in==$in2){
                echo"both string are same ";
            }else{
                echo"both string are not same";
            }
        }
        ?>
    </body>
</html>
