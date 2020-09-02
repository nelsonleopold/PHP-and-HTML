<!--
Name Nelson Leopold
Date 8/25/2020
This program does -- This program creates and HTML page that takes a name as input then displays a short message.
-->

<!DOCTYPE html>
<html>
    <head>
        <title>Hi User!!!</title>
        <style>
            body {
                background-color: rgb(231, 213, 189);
            }
        </style>
    </head>
    <body>
    <h1>Hi User!!!</h1>
    <h3>This is a PHP program that receives a value from "whatsName".</h3>
    <h3>Hi there, 
        <?php
            echo$_POST["firstName"];
        ?>
    !</h3>
    </body>
</html>