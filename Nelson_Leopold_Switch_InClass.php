<!--
Name Nelson Leopold
Date 9/23/2020
This program does -- This program asks the user to input one of four numbers, then runs one of: addition, multiplication
division, subtraction and then runs modulus for each number to compare and contrast what each does.
-->

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>

    <body>
        <h1>Learn Switch Statements</h1>

        <p><b>Enter one of the following numbers.</b></p>
        
        <p><b>10</b></p>
        <p><b>20</b></p>
        <p><b>50</b></p>
        <p><b>99</b></p>
        <!-- displays a simple HTML form -->
        <form action="Nelson_Leopold_Switch_InClass.php" method="post">
            <!-- captures user input from a text field and assigns it to the name userInput -->
            Enter one of the numbers stated above: <input type="text" name="userInput">
            <br>
            <br>
            <!-- adds a submit button to the form -->
            <input type="submit" name="submit">
            <br>
        </form>

        <?php
            # takes user input from the form and assigns it to $userInput
            $userInput = $_POST['userInput'];

            # checks to see if submit has been clicked
            if (isset($_POST['submit']))
            {
                # switch practice (use switch when needed to select one of many blocks of code to be executed)
                switch ($userInput)
                {
                    # first case; takes $userInput and adds, then modulos, then displays output
                    case 10:
                        $sum = $userInput + 60;
                        $modulus = $userInput % 27;
                        echo "The number you entered is $userInput: <br>";
                        echo "$userInput + 60 = $sum.<br>";
                        echo "$userInput % 27 = $modulus.<br>";
                        break;
                    
                    # second case; takes $userInput and multiplies, then modulos, then displays output    
                    case 20:
                        $product = $userInput * 23;
                        $modulus = $userInput % 17;
                        echo "The number you entered is $userInput: <br>";
                        echo "$userInput * 23 = $product.<br>";
                        echo "$userInput % 17 = $modulus.<br>";
                        break;

                    # third case; takes $userInput and divides, then modulos, then displays output    
                    case 50:
                        $quotient = $userInput / 22;
                        $modulus = $userInput % 22;
                        echo "The number you entered is $userInput: <br>";
                        echo "$userInput / 22 = $quotient.<br>";
                        echo "$userInput % 22 = $modulus. <br>";
                        break;

                    # fourth case; takes $userInput and subtracts, then modulos, then displays output    
                    case 99:
                        $difference = $userInput - 66;
                        $modulus = $userInput % 66;
                        echo "The number you entered is $userInput: <br>";
                        echo "$userInput - 66 = $difference.<br>";
                        echo "$userInput % 66 = $modulus.<br>";
                        break;

                    # default case if incorrect input is entered    
                    default:
                        echo "You did not enter one of the numbers I gave you. <br>";
                }
            }
        ?>
    </body>
</html>