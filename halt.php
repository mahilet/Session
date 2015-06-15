<?php
session_start();
//halt.php this file halts the loading of the page until a correct login is entered

//check form submission first
//store correct submission in variable
//start session

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
$passphrase=$_POST['passphrase'];

if (isset($passphrase)){//check if form element id 'passphrase' is set

    if (($passphrase=='letmein') && (!isset($_SESSION['login']))){//if passphrase is correct but a session is not started start session


        $_SESSION['login']=true;

        echo "Access granted!";
     
        //continue loading page
    }else if ($_SESSION['login']===true){//if passphrase is correct and session is started show page

                    //continue on to main page


    }else{//if a passphrase is entered but is not the correct passphrase show form with error message



        echo '<h1>Incorrect Passphrase</h1>
            <h2>Please Re-Enter Passphrase</h2>
            <form action="' . THIS_PAGE . '" method="post" id="form">
        <fieldset>

        <legend>Login</legend>
        <label>Passphrase</label>
        <input type="text" name="passphrase" id="passphrase">

        <input type="submit" id="submit" value="Send">
        </fieldset>
        </form>';
        die;

        echo '<img src="session.jpg" alt="Flow Chart" />';
    }
}else  if((!isset($passphrase)) && (!isset($_SESSION['login']))){//if passphrase is not set show form


  echo '<form action="' . THIS_PAGE . '" method="post" id="form">
        <fieldset>

        <legend>Login</legend>
        <label>Passphrase</label>
        <input type="text" name="passphrase" id="passphrase">

        <input type="submit" id="submit" value="Send">
        </fieldset>
        </form>';
        die;

        echo '<img src="session.jpg" alt="Flow Chart" />';
}
