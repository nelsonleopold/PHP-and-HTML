<!--
Name Nelson Leopold
Date 
This program does -- 
-->

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <p><b>Enter two numbers, I will tell you which number is greater.</b></p>
        
        <form action="inClassAssignment.php" method="POST">
            Number1: <input type="text" name="number1"><br>
            Number2: <input type="text" name="number2"><br>

            <input type="submit" name="submit">
        </form>

        <?php

            $num1 = $_POST['number1'];
            $num2 = $_POST['number2'];

            if (isset($_POST['submit']))
            {
                if ($num1 > $num2)
                {
                    echo("The first number is greater");
                }
                else if ($num1 < $num2)
                {
                    echo("The second number is greater");
                }
                else
                {
                    echo("The numbers are the same");
                }
            }
        ?>
    </body>
</html>