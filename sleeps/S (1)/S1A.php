<html>
    <body>
       <form action="" method = "post">
        Enter the frist value   <input type="text"name = "n1"><br>
        Enter the secound value <input type="text"name = "n2"><br>
        Add <input type="radio" name="r" value = "add"><br>
        Sub <input type="radio" name="r" value = "sub"><br>
        Mult<input type="radio" name="r" value = "mult"><br>
        <input type="submit" value="submit">
       </form> 
       <?php 
       if($_SERVER['REQUEST_METHOD']=="POST"){
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $r = $_POST['r'];
        switch ("$r") {
            case 'add':
                echo"subtraction is a ".$n1+$n2;
                break;
            case 'sub':
                echo"subtraction is a ".$n1-$n2;
                break;
            case 'mult':
                echo"Multification is a ".$n1*$n2;
                break;
            default:
                echo"Select any one opreation.....";
                break;
        }
       }
       ?>
    </body>
</html>