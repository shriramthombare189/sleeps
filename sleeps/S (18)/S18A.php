<html>
    <body>
        <form action="" method = "post"><br>
            Enter the mitter value : <input type="text" name="name"value="<?php if(isset($_POST['name']))echo $_POST['name'] ?>"><br>
             <input type="radio"name="g"value= "cm"<?php if(isset($_POST['g'])and $_POST['g']=='cm') echo 'checked';?>>   : CM<br>
             <input type="radio"name="g"value= "km" <?php if(isset($_POST['g'])and $_POST['g']=='km') echo 'checked';?>> :  KM<br>
            <input type="submit"value="Submit"><br><br>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $name = $_POST['name'];
            $gender = $_POST['g'];
            if ($gender=='cm') {
                $name = $name*100;
                echo"Metter to centimetter is a : $name";
            }
            $gender = $_POST['g'];
            if ($gender=='km') {
                $name = $name/1000;
                echo"Metter to kilomitter is a : $name";
            }
        }
        ?>
    </body>
</html>