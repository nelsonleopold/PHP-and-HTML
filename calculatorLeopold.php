<!-- 
Name Nelson Leopold
Date 8/25/2020
Summary of program -- This program takes two integer variables and computes the sum, difference, product, and quotient.
-->

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>

        <?php
            $firstVar = 3;
            $secondVar = 5;
            $sum = $firstVar + $secondVar;
            $diff = $firstVar - $secondVar;
            $prod = $firstVar * $secondVar;
            $quot = $firstVar / $secondVar;
            echo "<h5><b>Demonstrates use of numeric variables</b><h5>";
            echo "$firstVar + $secondVar = $sum<br>";
            echo "$firstVar - $secondVar = $diff<br>";
            echo "$firstVar * $secondVar = $prod<br>";
            echo "$firstVar / $secondVar = $quot";
        ?>

    </body>
</html>