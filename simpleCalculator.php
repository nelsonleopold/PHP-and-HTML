<!--
Name -- Nelson Leopold
Date -- 9/2/2020
This program does -- This program takes your name and two numbers, then returns a welcome message and a user selected calculation on those numbers.
-->

<html>
    <head>
        <style>
            body {
                background-color: tan;
                text-align: center;
                color: blue;
            }
            h1 {
                color: green;
            }
            h3 {
                color: blue;
            }
            #black {
                color: black;
            }
            
        </style>
    </head>
    <body>
        <?php
            $fNumber = $_POST["fnumber"];
            $sNumber = $_POST["snumber"];
            $operand = $_POST["operand"];
            echo "<h1>", "Hi ", $_POST["name"], ".", "</h1>";
            echo "<h3 id='black'>", "You selected ", $_POST["operand"], ".", "</h3>";
            
            switch ($operand) {
                case "Add":
                    echo "<h3>", $fNumber, " + ", $sNumber, " = ", $fNumber + $sNumber, ".", "</h3>";
                break;
                case "Subtract":
                    echo "<h3>", $fNumber, " - ", $sNumber, " = ", $fNumber - $sNumber, ".", "</h3>";
                break;
                case "Multiply":
                    echo "<h3>", $fNumber, " * ", $sNumber, " = ", $fNumber * $sNumber, ".", "</h3>";
                break;
                case "Divide":
                    echo "<h3>", $fNumber, " / ", $sNumber, " = ", $fNumber / $sNumber, ".", "</h3>";
                break;
                case "Modulus":
                    echo "<h3>", $fNumber, " % ", $sNumber, " = ", $fNumber % $sNumber, ".", "</h3>";
                break;
                case "Exponentiation":
                    echo "<h3>", $fNumber, " ** ", $sNumber, " = ", $fNumber ** $sNumber, ".", "</h3>";
                break;
                default:
                    echo "Not a number";
            } 
        ?>
        <img src="images/CutestPuppyThumbnail.jpg" alt="Cutest puppy in the world sitting in the grass">
    </body>
</html>