<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//funkcija sukuria forma ir atvaizduoja POST masyva
function form()
{
    print "<form method='post'><input type='email' name='email' placeholder='Email'><input type='password' name='password' placeholder='Password'><button type='submit' name='button'>Siusti</button></form>";

    if (isset($_POST['button'])) {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
//            print "Tavo el.pastas yra: $_POST[email] <br> Tavo slaptazodis yra: $_POST[password]";
            print 'Tavo el.pastas yra:' .  $_POST['email'] .  "<br> Tavo slaptazodis yra:" .  $_POST['password'];
        } else {
            print "Klaidingai ivesti duomenys";
        }
    }
}

?>