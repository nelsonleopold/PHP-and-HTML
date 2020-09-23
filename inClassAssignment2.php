<!--
Name Nelson Leopold
Date 9/16/2020
This program does -- This program compares two numbers and tells which is greater
-->

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
            <h4>Result of the comparison</h4>
            <?php
                //create two variables and assign them numbers from html page
                $num1 = $_POST['number1'];
                $num2 = $_POST['number2'];

                //make comparisons and return a message which is greater
                if ($num1 > $num2)
                {
                    echo("The first number is greater");
                }
                else if ($num1 < $num2)
                {
                    echo("The second number is greater");
                }
                else
                    echo("The numbers are the same");
            ?>
    </body>
</html>