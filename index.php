<?php
session_start();
//index.php this is our main html file
include 'halt.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>A3:Session Passphrase</title>
    </head>
    <body>
        <p>You entered the correct passphrase! Here's your page!</p>
        <img src="session.jpg" alt="Flow Chart" />
    </body>
</html>
