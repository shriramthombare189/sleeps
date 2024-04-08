<html>
    <body>
        <form action="" method = "post"><br>
            Name : <input type="text" name="name"value="<?php if(isset($_POST['name']))echo $_POST['name'] ?>"><br>
            address : <input type="text"name="addres"value="<?php if(isset($_POST['addres'])) echo $_POST['addres'] ?>"><br>
            salary : <input type="text"name="salary"value="<?php if(isset($_POST['salary'])) echo $_POST['salary'] ?>"><br>
             <input type="radio"name="g"value= "mail"<?php if(isset($_POST['g'])and $_POST['g']=='mail') echo 'checked';?>>   : mail<br>
             <input type="radio"name="g"value= "femail" <?php if(isset($_POST['g'])and $_POST['g']=='femail') echo 'checked';?>> : femail<br>
            <input type="submit"value="Submit"><br><br>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $name = $_POST['name'];
            $addres = $_POST['addres'];
            $salary = $_POST['salary'];
            $gender = $_POST['g'];

            echo"employee name is a : $name<br>";
            echo"employee address is a : $addres<br>";
            echo"employee Salary is a : $salary<br>";
            echo"Gender is a : $gender<br>";
        }
        ?>
    </body>
</html>