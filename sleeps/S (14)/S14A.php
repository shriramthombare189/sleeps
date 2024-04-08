<html>
    <body>
        <form action="" method="post">
           Enter the name :  <input type="text" name="name"value="<?php if(isset($_POST['name']))echo $_POST['name']?>">
            <input type="submit" value = "submit">
        </form>
        <?php
        if(isset($_POST['name'])){
        $name = $_POST['name'];
        echo strrev($name);
        }
        ?>
    </body>
</html>