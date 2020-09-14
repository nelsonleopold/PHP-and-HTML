<!--
Name Nelson Leopold
Date 9/14/2020
This program does -- This program asks for different catagories of responses from user, then makes a story. Like a madlib. 
-->

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
            body {
                background-color: lightblue;
                text-align: center;
                font-weight: 900;
            }
        </style>
    </head>
    <body>
        <h1>Little Boy Who?</h1>
        Little Boy <?php echo $_POST["color"]?>, come blow your <?php echo $_POST["instrument"]; ?>!<br>
        The <?php echo $_POST["animal"]?> is in the <?php echo $_POST["place"]?>, the <?php echo $_POST["anotherAnimal"]?> is in the <?php echo $_POST["vegetable"]; ?>.<br>
        Where's the boy that looks after the <?php echo $_POST["yetAnotherAnimal"]; ?>?<br>
        He's under the <?php echo $_POST["aStructure"]?>, <?php echo $_POST["action"]?>.<br>
        <br>
        End of story!
    </body>
</html>